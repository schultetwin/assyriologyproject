<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>nztvector.php</title>
</head>
<body>
<p style=(font-size:3vw)>
The candidate signs below are ordered according to increasing distance from your input.
</p>
<p>
The tvector counts--the input ("t"vector because it comes from a tablet.)--are, of course, the same for each of the candidates.  However, one of the zero entries can appear if there is a nonzero count at that entry in the candidate.  The input has not changed you are just seeing more of it.
</p>
<p>
The xvector ("x"vector because it is the unknown.) counts, also of course, most likely change from candidate to candidate.
</p>
<p>
If for some reason you want to modify the entry in the database for one of these candidates, click on its modify button.  However, that is still a work in progress.
</p>

<?php
/*  Beginning of a php SCRIPT  */

/*  The following is the standard connection to the database.  */
$conn = mysqli_connect('127.0.0.1', 'root', '', 'dbassyriology', '3308');
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
}

/* AN OUTPUT,  $anoutput, IS A MULTIDIMENSIONAL ARRAY WITH THREE PARTS.  THE FIRST PART IS THE ASSOCIATIVE ARRAY $tvectorvals, THE INPUT.  IT IS INITIALIZED WITH A FIRST KEY=>VALUE PAIR 'MAXDT' => 4. THE SECOND PART $xvectorvals COMES FROM THE TABLE IN THE DATABASE.  IT IS INITIALIZED WITH 'id' => 0.  THE THIRD PART IS WHERE distance IS RECORDED. */


$anoutput['$tvectorvals'] = array('MAXDT' => 4) ; 
$anoutput['$xvectorvals'] = array('id' => 0 );
$anoutput = array( 'distance' => 0);

/* THE FOLLOWING ARRAY STORES THE OUTPUTS AS EACH IS CREATED, THAT IS, EACH ENTRY IS AN $anoutput ARRAY.*/
$theoutputs = array( );

/* THE FOLLOWING FUNCTION IS USED TO CALCULATE THE DISTANCE BETWEEN THE INPUT AND A ROW IN THE DATABASE.  WHEN USED THE ARGUMENT $assarrayshort WILL BE $tvectorvals AND THE ARGUMENT $assarraylong WILL BE $xvectorvals.  THIS IS A BIT COMPLICATED BECAUSE $tvectorvals AND $xvectorvals DO NOT HAVE EXACTLY THE SAME STRUCTURE.  CAREFULLY NOTE THAT $index IS IN $assarrayshort SO IT IS A MARK, A CONNECTOR, OR MAXDT.  THIS MEANS THAT ONLY THESE KEYS WILL BE TESTED.  THIS IS WHAT WE WANT EXCEPT FOR MAXDT.  BUT MAXDT IS NOT A KEY IN $assarraylong SO THE isset WILL BE FALSE.*/

function metricd1($X, $Y)
{
        $dist = 0;        
	foreach($X as $index => $value){
	$dist = isset($Y[$index]) ? $dist + abs($Y[$index] - $value): $dist;}
reset($X);
reset($Y);       
        return $dist;              
}

/* THE GLOBAL VARIABLE $_POST CONTAINS ENTRIES THAT WERE SELECTED IN THE PREVIOUS PAGE, THAT IS, THE INPUT tvector PLUS MAXDT.  THE NEXT LINE CREATES $assarrayshort.*/
$assarrayshort = $_POST; 

/*THE NEXT LINE JUST COPIES MAXDT OUT OF THE ARRAY $assarrayshort AND MAKES IT AVAILABLE AS A VARIABLE. ITS VALUE WILL NOW BE WHATEVER THE USER SET IN THE PREVIOUS PAGE. */
$MAXDT = $assarrayshort['MAXDT'];

/* NEXT IS AN IMPORTANT PART OF THIS SCRIPT.  ONE ROW AT A TIME IS READ FROM THE TABLE nbxvectors AND ITS DISTANCE FROM THE INPUT IS CALCULATED.  IF THIS DISTANCE IS LESS THAN OR EQUAL TO MAXDT, THIS ROW IS USED TO CONSTRUCT AN OUTPUT.*/
$query = "SELECT * FROM nzxvectors";                                          
if ($result = mysqli_query($conn, $query))                                        
WHILE ($row = mysqli_fetch_assoc($result))                                     
	{                                                                                        
	$dstnc = metricd1($row, $assarrayshort);                          
	if ($dstnc <= $MAXDT ) 
		{
		$anoutput['tvectorvals'] = $assarrayshort;
		$anoutput['xvectorvals'] = $row;
		$anoutput['distance'] = "$dstnc";
/* NOW TACK THIS $anoutput ONTO THE END OF $theoutputs. */		

                               $theoutputs[  ] = $anoutput;  
                               }
	}
/* AT THIS POINT THE MULTIDIMENSIONAL ARRAY $theoutputs CONTAINS ALL THE OUTPUTS, BUT THEY ARE NOT YET ORDERED BY DISTANCE.  THE NEXT TWO LINES ORDERS THEM. */
 /* print_r($theoutputs); */
                uasort($theoutputs, function($a, $b) {
	return $a['distance'] <=> $b['distance'];});

/* THE NEXT 25 LINES GOES THROUGH THE NOW ORDERED OUTPUTS AND FOR EACH OUTPUT SHOWS THE DISTANCE, THE SIGNIFICANT COUNTS IN THE tvector, THE SIGNIFICANT COUNTS IN THE xvector, THE IMAGE OF THE SIGN, AND A FEW OTHER THINGS.  "SIGNIFICANT" MEANS THOSE PLACES WHERE tvector AND xvector ARE NOT BOTH ZERO.  NOTE THAT $theoutputs IS AN INDEXED ARRAY NOT AN ASSOCIATIVE ONE SO THE $key IS A NUMBER.  BUT THE ENTRIES IN THIS INDEXED ARRAY ARE ASSOCIATIVE ARRAYS. */
$count = 1;
foreach($theoutputs as $key => $output){
/*THE NEXT TWO LINES MAKE THE BACKGROUND COLOR ALTERNATE WITH EACH OUTPUT.  */
	 if ($count % 2 == 0){$color= '#fff'; } else {$color= '#bbb'; }
	echo "<div style = 'background-color: $color;'> ";
/*           */
	echo "The distance of this candidate from your input is  " . $output["distance"];
	echo "<br>";
	echo "The output count is " . $count;
	echo "<br>"; 
/*THE NEXT TWO LINES DEFINE THE TWO ARRAYS THAT WILL BE PROCESSED NEXT.  WE NEED TO CLEAN THEM UP.  THEY DO NOT CONTAIN EXACTLY THE SAME KEYS, AND FOR SOME SHARED KEYS THE VALUES ARE BOTH ZERO.  THESE ELEMENTS CAN BE DELETED. */
$array2 = $output['tvectorvals'];
$array1 = $output['xvectorvals'];

/* FIRST WE REMOVE EVERY ELEMENT IN $array1 WITH A KEY THAT IS NOT A KEY IN $array2.  JUST THE COUNTS REMAIN. */
$reducedarray1 = array_intersect_key($array1, $array2);
/* THEN WE REMOVE EVERY ELEMENT IN  $array2 WITH A KEY THAT IS NOT A KEY IN $reducedarray1.  */
$reducedarray2 = array_intersect_key($array2, $reducedarray1);
/* $reducedarray1 CONTAINS JUST THE COUNTS OF THE CANDIDATE AND $reducedarray2 CONTAINS JUST THE COUNTS OF THE INPUT. HOWEVER, THERE ARE MANY COUNTS WHERE THEY ARE BOTH ZERO.  WE REMOVE THESE.  THE NEXT LINE REMOVES THEM FROM $reducedarray2 */
foreach($reducedarray2 as $key2 => $value2){if($value2==0 AND $reducedarray1[$key2]==0){unset($reducedarray2[$key2]);}};
/* THE NEXT LINE REMOVES THE UNWANTED ZEROS FROM $reducedarray1 */
$reducedarray1 = array_intersect_key($reducedarray1, $reducedarray2);
/* EACH KEY WHERE BOTH ARRAYS WERE ZERO HAS BEEN REMOVED. */
/*HOWEVER, THERE IS STILL A PROBLEM:  THE KEYS IN THESE TWO ARRAYS ARE NOT IN THE SAME ORDER.  WE PICK THE ORDER OF  $reducedarray2 AS THE DESIRED ORDER, AND CHANGE $reducedarray1 TO THIS ORDER.  FIRST, WE CREATE A SIMPLE INDEXED ARRAY FROM  $reducedarray2 */

	$properorderarray = array_keys($reducedarray2);

/* THE INDICIES FOR THIS ARRAY ARE 0, 1, 2, 3, ... .  THE VALUES ARE THE KEYS FROM $reducedarray2 WITH THEIR ORDER FROM THAT ARRAY.  IF WE FLIP $properorderarray, WE GET AN ASSOCIATIVE ARRAY WITH THE KEYS FROM $reducedarray2 IN THE PROPER ORDER, THE VALUES 0, 1, 2, 3, ... .  NEXT REORDER. */

$reducedarray1 = array_merge(array_flip($properorderarray), $reducedarray1);

/*THE ARRAYS array_flip($properorderarray) AND $reducedarray1 HAVE EXACTLY THE SAME KEYS.  THE FUNCTION array_merge() IN THIS CASE CREATES AN ARRAY WITH, AGAIN, EXACTLY THE SAME KEYS WITH THE ORDER OF array_flip($properorderarray) AND THE VALUES OF  $reducedarray1: PRECISELY WHAT WE DESIRE.    */
	echo "The size of this candidate is" . "  " . array_sum($reducedarray1);
	echo "<br>";

	echo "The significant tvector counts are" . "       "; 
		foreach($reducedarray2 as $tkey => $tvalue)
		{
		echo ucfirst("$tkey") . "=" . "$tvalue"; echo "     ";
		}	
	echo "<br>";

	echo "The significant xvector  counts are   ";  
		foreach($reducedarray1 as $xkey => $xvalue)
		{
			echo ucfirst("$xkey") . "=" . "$xvalue"; echo "      ";
		}
		 
	echo "<br>";
	echo "All the other counts in your input and this candidate are zero.";
	echo "<br>";
	echo "Period:" . "  " . $output['xvectorvals']["period"] . "  ";
	echo "Provenance:" . "  " . $output['xvectorvals']["provenance"] . "  ";
	echo "<br>";
	echo "Mz number" . "  " . $output['xvectorvals']["mznum"] . "  ";
	echo "<br>";
	echo $output['xvectorvals']["image_path"];
	echo $output['xvectorvals']["blk_image_path"];
	echo "<br>";
	echo "Values:  " . $output['xvectorvals']["value"];
	echo "<br>";
                 echo "Other Values:  " ;
                 echo "<br>";
                 echo $output['xvectorvals']["othervalues"];




		
/* THE FOLLOWING LINES ARE CONCERNED WITH MODIFYING THE CORRESPONDING ROW IN THE IN THE DATABASE TABLE nzxvectors IF THE USER WANTS TO DO SO. */

/* WE WANT TO SEND $output['xvectorvals'] TO OBeditingpage, BUT  CANNOT SEND AN ARRAY SO WE FIRST SERIALIZE IT. BUT THAT IS NOT ENOUGH.  I NEED TO SEND IT AS A HIDDEN VARIABLE, AND SERIALIZED VARIABLES CANNOT BE HIDDEN SO I HAVE TO base64_encode IT.  $xoutput IS A STRING THAT I CAN SEND AS A HIDDEN VARIABLE. */
	$xencoded = base64_encode(serialize($output['xvectorvals']));
//	$xencoded= $xoutput;
//	print($xencoded);
//	print_r(unserialize($xencoded));
/* IF THE Modify SUBMIT BUTTON IS PUSHED, THE STRING $xencoded IS SENT TO NZeditingpage IN $_POST WHERE IT WILL BE base64_decode  and UNSERIALIZED. */
	
echo "
<form  method = 'POST' action = 'NZeditingpage.php' /> 

<input type='hidden' name = 'xencoded' id = 'xencoded'  value= '$xencoded' /> 

<input type = 'submit' name = 'modify' id = 'modify' value = 'Modify' />
</form>"; 
echo "<br>";
	$count++; echo "</div>";}
	
	/* CLOSE THE CONNECTION TO THE DATABASE. */
	$conn->close( );

 /* End of the php SCRIPT */
?> 
</body>
</html>            
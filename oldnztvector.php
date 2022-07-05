<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<p style=(font-size:3vw)>
The candidate signs below are ordered according to increasing distance from the input.
</p>
<p>
The tvector counts--the input--are, of course, the same in each of the outputs.  MAXDT is included here as a reference.  
</p>
<p>
The xvector counts show several things in addition to the counts of marks and connectors, in particular and most important, the picture of the sign.
</p>
<p>
If for some reason you want to modify the entry in the database for one of these outputs, click on its modify button.
</p>

<?php
/*  Beginning of a php SCRIPT  */

/*  The following is the standard connection to the database.  */
require('database.php');
$conn = getMysqliConnection();

/* THE FOLLOWING ARE THE THREE PARTS OF $anoutput.  IT IS A MULTIDIMENSIONAL ARRAY.  THE FIRST PART IS THE ASSOCIATIVE ARRAY $tvectorvals. IT IS THE INPUT.  IT IS INITIALIZED WITH A FIRST KEY=>VALUE PAIR 'MAXDT => 4. THE SECOND PART $xvectorvals COMES FROM THE TABLE IN THE DATABASE.  IT IS INITIALIZED WITH 'id' => 0.  THE THIRD PART IS WHERE distance IS RECORDED. */


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

/* NEXT IS AN IMPORTANT PART OF THIS SCRIPT.  ONE ROW AT A TIME IS READ FROM THE TABLE oaxvectors AND ITS DISTANCE FROM THE INPUT IS CALCULATED.  IF THIS DISTANCE IS LESS THAN OR EQUAL TO MAXDT, THIS ROW IS USED TO CONSTRUCT AN OUTPUT.*/
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

                uasort($theoutputs, function($a, $b) {
	return $a['distance'] <=> $b['distance'];});

/* THE NEXT 25 LINES GOES THROUGH THE NOW ORDERED OUTPUTS AND FOR EACH OUTPUT SHOWS THE DISTANCE, THE NONZERO COUNTS IN THE tvector, THE NONZERO COUNTS IN THE xvector, AND FINALLY THE IMAGE OF THE SIGN.  NOTE THAT $theoutputs IS AN INDEXED ARRAY NOT AN ASSOCIATIVE ONE SO THE $key IS A NUMBER.  BUT THE ENTRIES IN THIS INDEXED ARRAY ARE ASSOCIATIVE ARRAYS. */

foreach($theoutputs as $key => $output)
	{
	echo "The distance is  " . $output["distance"];
	echo "<br>"; 
	echo "tvector nonzero counts are" . "       "; 
		foreach($output['tvectorvals'] as $tkey => $tvalue)
		{
		 if ($tvalue > 0 || $tvalue < 0)
			{
			echo ucfirst("$tkey") . "=" . "$tvalue"; echo "     ";
			} 
		}	
	echo "<br>";
	echo "xvector nonzero counts are   ";  
		foreach($output['xvectorvals'] as $xkey => $xvalue)
		{
		if ($xvalue > 0 || $xvalue < 0)
			{
			echo ucfirst("$xkey") . "=" . "$xvalue"; echo "      ";
			}
		} 
	echo "<br>";	
	echo "Value " . $output['xvectorvals']["value"];
	echo "<br>";
	echo $output['xvectorvals']["image_path"];
		
/* THE FOLLOWING LINES ARE CONCERNED WITH MODIFYING THE CORRESPONDING ROW IN THE IN THE DATABASE TABLE oaxvectors IF THE USER WANTS TO DO SO. */

/* WE WANT TO SEND $output['xvectorvals'] TO OAeditingpage, BUT  CANNOT SEND AN ARRAY SO WE FIRST SERIALIZE IT. BUT THAT IS NOT ENOUGH.  I NEED TO SEND IT AS A HIDDEN VARIABLE, AND SERIALIZED VARIABLES CANNOT BE HIDDEN SO I HAVE TO base64_encode IT.  $xoutput IS A STRING THAT I CAN SEND AS A HIDDEN VARIABLE. */
	$xencoded = base64_encode(serialize($output['xvectorvals']));
//	$xencoded= $xoutput;
//	print($xencoded);
//	print_r(unserialize($xencoded));
/* IF THE Modify SUBMIT BUTTON IS PUSHED, THE STRING $xencoded IS SENT TO NZeditingpage IN $_POST WHERE IT WILL BE base64_decode  and UNSERIALIZED. */
	
echo "
<form  method = 'POST' action = 'NZeditingpage.php' /> 
<br/>
<input type='hidden' name = 'xencoded' id = 'xencoded'  value= '$xencoded' /> 
<br/>
<input type = 'submit' name = 'modify' id = 'modify' value = 'Modify' />
</form>"; 
echo "<br>";
	}
	
	/* CLOSE THE CONNECTION TO THE DATABASE. */
	$conn->close( );

 /* End of the php SCRIPT */
?> 
</body>
</html>            

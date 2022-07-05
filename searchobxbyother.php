<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>searchobxbyother</title>
</head>
<body>


<?php
/*  Beginning of a php SCRIPT  */

/*  The following is the standard connection to the database.  */
require('database.php')
$conn = getMysqliConnection();
$count = 1;

$searchbyother = $_POST['SEARCHBYOTHER'];
/* $searchbyother is the user's search input.  It would not be practical to demand that the user use some standard format so we format the search input ourselves here.  TRIM is a php string function and a mysql string function with the same name. They do the same thing.  Here we are removing all leading and following spaces.*/
$searchbyother = TRIM($searchbyother);
/*Then we are adding one leading and one following space.  This, then, is our standard format.  It assumes that the user's input does not contain a comma.  We could always drop this assumption and remove any commas, if necessary.  Note that the following is a php concatenation and not a mysql concatenation. */
$searchbyother = " ". $searchbyother. " ";
/*Also we cannot assume that the othervalues in a database row will be in some standard format so we format othervalues, too. This is done with a user-defined mysql function, cleanedother, which I created.   This function does NOT change the entry in the database table, it merely changes the format that is being used in the SELECT statement below.  First, the function replaces each comma in othervalues with a space.  Second, it removes all leading and following spaces.  Third, it adds a single space prefix and a single space suffice.  The concatenation used in the function is, of course, the mysql concatenation. */
$query = "SELECT  *  FROM obxvectors WHERE cleanedother(othervalues) COLLATE utf8mb4_0900_as_cs  LIKE '%$searchbyother%' "; 
/*Note that COLLATE utf8mb4_0900_as_cs is in the above query.  It changes the collation of this query to accent sensitive, as, and case sensitive, cs.    */                         
if ($result = mysqli_query($conn, $query))                                        
WHILE ($row = mysqli_fetch_assoc($result))                                     
	{
	 if ($count % 2 == 0){$color= '#fff'; } else {$color= '#bbb'; }
	echo "<div style = 'background-color: $color;'> ";
                  echo "The search count is " . $count;
	echo "<br>";   
	echo "id" . "  " . $row["id"] .  "  ";
	echo "Period:" . "  " . $row["period"] . "  ";
	echo "Provenance:" . "  " . $row["provenance"] . "  ";
	echo "<br>";
	echo "Labat number" . "  " . $row["labatnum"] . "  ";
	echo "Michel number" . "  " . $row["michelnum"] . "  ";
	echo "<br>";
	echo $row["image_path"];
	echo $row["blk_image_path"];
	echo "<br>";
	echo "Values:  " . $row["value"];
	echo "<br>";
                 echo "Other Values:  " ;
                 echo "<br>";
                 echo $row["othervalues"];                                                                                      
	echo "<br>";
/*Finally, we want to output the counts of this sign in the proper order.   Here, again, is the proper order.  Recall that it is an indexed array with the values as listed in its definition below. */
                $obtheorder = array('DV', 'RH', 'HE', 'RHBB', 'DVBB', 'OBB', 'DVHT', 'RHHT', 'OHT', 'RDD', 'RUD', 'LDD', 'LUD', 'LH', 'UV', 'LHBB', 'UVBB', 'DNGR', 'VL', 'UDL', 'HL', 'DDL', '2C', 'L2T', 'R2T', 'T2T', 'B2T', 'NWC', 'NEC', 'SEC', 'SWC', 'O2T', '3T', '4T', 'H2T', 'V2T', 'RMC', 'TMC', 'BMC', 'LMC', 'UNKN');
/*The variable $row contains the counts in addition to the things that are echoed above.  So we extract the counts from $row.    */
$array1 = $row;
/*The following results in $array1 keeping only those keys that are values in $obtheorder.  */
$array1 = array_intersect_key($array1, array_flip($obtheorder)); 
/*Next we insure that $array1 is in the proper order.      */  
$array1 = array_merge(array_flip($obtheorder),  $array1);
	echo "The counts for this sign are  ";  echo "<br>";
		foreach($array1 as $xkey => $xvalue)
			{if ($xvalue != 0) 
			{echo ucfirst("$xkey") . "=" . "$xvalue"; echo "   "; }			
			}               

$count++; echo "</div>";}       
	


 /* End of the php SCRIPT */
?> 
</body>
</html>            

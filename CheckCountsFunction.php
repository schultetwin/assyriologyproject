<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
echo "Hello World";
/*  The following is the standard connection to the database.  */
$conn = mysqli_connect('127.0.0.1', 'root', '', 'dbassyriology', '3308');
if (mysqli_connect_errno())
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
};
$query = "SELECT * FROM nbxvectors";                                          
if ($result = mysqli_query($conn, $query))                                        
WHILE ($row = mysqli_fetch_assoc($result)) {
  echo $row['othervalues'];} 
?>                             

</body>
</html>
<!--	

 


$SVGFILE = SELECT substring_index(substring_index($row['image_path'], '"', -1), '"', 1);


{Get the svg file for this row and copy it into $SVGFILE;
		IF row[image_path] is not empty, FIND "oasvgimages/mxxx.svg" 
			$SVGFILE = $row['image_path'];
		COPY the contents of oasvgimages/mxxx.svg into $SVGFILE;
	  For each non-zero in $row check that it agrees with $SVGFILE;
		For each possible abbreviation such as DV count the number of times it occurs in $SVGFILE;
	  If it does not agree, output row id has a problem;
	  Go to next row;      }




$theorder = array('DV', 'RH', 'HE', 'RHBB', 'DVBB', 'OBB', 'DVHT', 'RHHT', 'OHT', 'RDD', 'RUD', 'LDD', 'LUD', 'LH', 'UV', 'LHBB', 'UVBB', 'DNGR', 'VL', 'UDL', 'HL', 'DDL', '2C', 'L2T', 'R2T', 'T2T', 'B2T', 'NWC', 'NEC', 'SEC', 'SWC', 'O2T', '3T', '4T', 'H2T', 'V2T', 'RMC', 'TMC', 'BMC', 'LMC', 'UNKN'); 
-->

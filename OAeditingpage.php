<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style> 
label {
	width: 370px;
	display: inline-block;
	text-align:right
	}
.container {
	display: grid;
	grid-template-columns: 1.1fr  0.8fr  1.1fr ;
	}
</style>
	</head>
	<body>


<?php
require('database.php');
$conn = getMysqliConnection();

// print($_POST['xencoded']);
$xxoutput = unserialize(base64_decode($_POST['xencoded']));

/* echo "Print $xxoutput next";
print_r($xxoutput);
unset($xxoutput['id']);
print_r($xxoutput); */
?>

	
 	<h1 align = "center"> MODIFY AN OA SIGN ENTRY</h1><br><br>
<form method = "post">


<div class = "container">	
<div style = "color:red"  >

<input type = "hidden" id = "id"  name = "id" value = "<?php echo $xxoutput['id']; ?>">

<label for "DV">DOWN VERTICAL <img src = "signimages/DV.png" /> DV </label>
<input align "right"  type = "number"  size = "1" id = "DV" name = "DV" min = "0" max = "50" value = "<?php echo $xxoutput['DV']; ?>">
	<br>
<label for "LH">LEFT HORIZONTAL <img src = "signimages/LH.png" /> LH </label>
<input type = "number" size = "1" id = "LH" name = "LH" min = "0" max = "50" value = "<?php echo $xxoutput['LH']; ?>">
	<br>
<label for "UV">UP VERTICAL  <img src = "signimages/UV.png" /> UV </label>
<input type = "number" size = "1" id = "UV" name = "UV" min = "0" max = "50" value = "<?php echo $xxoutput['UV']; ?>">
	<br>
<label for "RH">RIGHT HORIZONTAL  <img src = "signimages/RH.png" />   RH </label>
<input type = "number" size = "1" id = "RH" name = "RH" min = "0" max = "50" value = "<?php echo $xxoutput['RH']; ?>">
	<br><br>
<label for "VL">VERTICAL LINE <img src = "signimages/VL.png" />  VL </label>
<input type = "number" size = "1" id = "VL" name = "VL" min = "0" max = "50" value = "<?php echo $xxoutput['VL']; ?>">
	<br>
<label for "UDL">UP DIAGONAL LINE <img src = "signimages/UDL.png" /> UDL </label>
<input type = "number" size = "1" id = "UDL" name = "UDL" min = "0" max = "50" value = "<?php echo $xxoutput['UDL']; ?>">
	<br>
<label for "HL">HORIZONTAL LINE <img src = "signimages/HL.png" /> HL </label>
<input type = "number" size = "1" id = "HL" name = "HL" min = "0" max = "50" value = "<?php echo $xxoutput['HL']; ?>">
	<br>
<label for "DDL">DOWN DIAGONAL LINE <img src = "signimages/DDL.png" /> DDL </label>
<input type = "number" size = "1" id = "DDL" name = "DDL" min = "0" max = "50" value = "<?php echo $xxoutput['DDL']; ?>">
	<br><br>
<label for "RDD">RIGHT DOWN DIAGONAL <img src = "signimages/RDD.png" /> RDD </label>
<input type = "number" size = "1" id = "RDD" name = "RDD" min = "0" max = "50" value = "<?php echo $xxoutput['RDD']; ?>">
	<br>
<label for "LDD">LEFT DOWN DIAGONAL <img src = "signimages/LDD.png" /> BDD </label>
<input type = "number" size = "1" id = "LDD" name = "LDD" min = "0" max = "50" value = "<?php echo $xxoutput['LDD']; ?>">
	<br>
<label for "LUD">LEFT UP DIAGONAL  <img src = "signimages/LUD.png" /> LUD </label>
<input type = "number" size = "1" id = "LUD" name = "LUD" min = "0" max = "50" value = "<?php echo $xxoutput['LUD']; ?>">
	<br>
<label for "RUD">RIGHT UP DIAGONAL <img src = "signimages/RUD.png" /> RUD </label>
<input type = "number" size = "1" id = "RUD" name = "RUD" min = "0" max = "50" value = "<?php echo $xxoutput['RUD']; ?>">
	<br><br>
<label for "ORDD">RIGHT DOWN DIAGONAL OVERWRITE <img src = "signimages/ORDD.png" /> ORDD </label>
<input type = "number" size = "1" id = "ORDD" name = "ORDD" min = "0" max = "50" value = "<?php echo $xxoutput['ORDD']; ?>">
	<br>
<label for "OLDD">LEFT DOWN DIAGONAL OVERWRITE <img src = "signimages/OLDD.png" />  OLDD </label>
<input type = "number" size = "1" id = "OLDD" name = "OLDD" min = "0" max = "50" value = "<?php echo $xxoutput['OLDD']; ?>">
	<br>
<label for "OLUD">LEFT UP DIAGONAL OVERWRITE <img src = "signimages/OLUD.png" /> OLUD </label>
<input type = "number" size = "1" id = "OLUD" name = "OLUD" min = "0" max = "50" value = "<?php echo $xxoutput['OLUD']; ?>">
	<br>
<label for "ORUD">RIGHT UP DIAGONAL OVERWRITE <img src = "signimages/ORUD.png" /> ORUD </label>
<input type = "number" size = "1" id = "ORUD" name = "ORUD" min = "0" max = "50" value = "<?php echo $xxoutput['ORUD']; ?>">
	<br><br>
<label for "HE">HEEL <img src = "signimages/HE.png" />  HE </label>
<input type = "number" size = "1" id = "HE" name = "HE" min = "0" max = "50" value = "<?php echo $xxoutput['HE']; ?>">
	<br>
<label for "OHE">HEEL OVERWRITE <img src = "signimages/OHE.png" /> OHE </label>
<input type = "number" size = "1" id = "OHE" name = "OHE" min = "0" max = "50" value = "<?php echo $xxoutput['OHE']; ?>">
	<br><br>
<label for "DVBB">DOWN VERTICAL BARBELL <img src = "signimages/DVBB.png" /> DVBB </label>
<input type = "number" size = "1" id = "DVBB" name = "DVBB" min = "0" max = "50" value = "<?php echo $xxoutput['DVBB']; ?>">
	<br>
<label for "LHBB">LEFT HORIZONTAL BARBELL  <img src = "signimages/LHBB.png" /> LHBB </label>
<input type = "number" size = "1" id = "LHBB" name = "LHBB" min = "0" max = "50" value = "<?php echo $xxoutput['LHBB']; ?>">
	<br>
<label for "UVBB">UP VERTICAL BARBELL  <img src = "signimages/UVBB.png" />  UVBB </label>
<input type = "number" size = "1" id = "UVBB" name = "UVBB" min = "0" max = "50" value = "<?php echo $xxoutput['UVBB']; ?>">
	<br>
<label for "RHBB">RIGHT HORIZONTAL BARBELL  <img src = "signimages/RHBB.png" /> RHBB </label>
<input type = "number" size = "1" id = "RHBB" name = "RHBB" min = "0" max = "50" value = "<?php echo $xxoutput['RHBB']; ?>">
	<br>
<label for "OBB">OTHER BARBELL   OBB </label>
<input type = "number" size = "1" id = "OBB" name = "OBB" min = "0" max = "50" value = "<?php echo $xxoutput['OBB']; ?>">
	<br><br>     
<label for "DVHT">DOWN VERTICAL HEAD-TO-TAIL  <img src = "signimages/DVHT.png" />  DVHT </label>
<input type = "number" size = "1" id = "DVHT" name = "DVHT" min = "0" max = "50" value = "<?php echo $xxoutput['DVHT']; ?>">
	<br>
<label for "LHHT">LEFT HORIZONTAL HEAD-TO-TAIL  <img src = "signimages/LHHT.png" /> LHHT </label>
<input type = "number" size = "1" id = "LHHT" name = "LHHT" min = "0" max = "50" value = "0">
	<br>
<label for "UVHT">UP VERTICAL HEAD-TO-TAIL  <img src = "signimages/UVHT.png" />  UVHT </label>
<input type = "number" size = "1" id = "UVHT" name = "UVHT" min = "0" max = "50" value = "<?php echo $xxoutput['UVHT']; ?>">
	<br>
<label for "RHHT">RIGHT HORIZONTAL HEAD-TO-TAIL  <img src = "signimages/RHHT.png" /> RHHT </label>
<input type = "number" size = "1" id = "RHHT" name = "RHHT" min = "0" max = "50" value = "<?php echo $xxoutput['RHHT']; ?>">
	<br>
<label for "OHT">OTHER HEAD-TO-TAIL   OHT </label>
<input type = "number" size = "1" id = "OHT" name = "OHT" min = "0" max = "50" value = "<?php echo $xxoutput['OHT']; ?>">
	<br><br>
<label for "DNGR">DINGER <img src = "signimages/DNGR.png" /> DNGR </label>
<input type = "number" size = "1" id = "DNGR" name = "DNGR" min = "0" max = "50" value = "<?php echo $xxoutput['DNGR']; ?>">
	<br><br>
</div>

<div style align "left">
<p>
THIS PAGE IS WORK IN PROGRESS.
</p> 
<p>
You just picked one of the candidates from your search to modify.  All of its xvector entries are copied here.  There are two things that you can do with it.  First, you can edit it.   You can change anything except for the id, labatnum, michelnum, period, provenance, value, and the sign image.  Make your changes and then click EDIT.  The usual reason for editing is to correct the counts.  This will edit each entry in the row in the oaxvectors table in the database.  Second, you can add a new row to the oaxvectors table.  Make your changes and then click on "ADD".  Again, you can change anything except for the id, labatnum, michelnum, period, provenance, value, and the sign image.  The usual reason for doing this is to add an alternate way of counting things.  This new row will automatically be assigned an id by the database.
</p>
<p>
Eventually there will be a "NEW" button which allows you to insert a completely new row in the table, but as with the others the system will still pick the id. I just need a reasonable way for the user to create a sign image.  A way to do it already exists. I just have to apply it to cuneiform signs.  At the moment I store the signs as .png images.  This means they are collections of many pixels.  I am going to switch slowly to .svg (scalable vector graphics) images. The following is the .svg file for a DV, down vertical mark:
</p>
<p>
<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
<g>
<polygon points="0,0,24,0,14,10,14,80,10,80,10,10" style= "fill:red" />
</g>
</svg>
</p>
<p>
Fortunately, there are many sites on the web explaining how to scale, translate, and rotate .svg images and groups of .svg images.  For this DV that just comes down to changing some or all of the 12 numbers in the polygon.


	<br><br>
<?php echo "The id of the row is " . $xxoutput['id']; ?>
	<br><br>
<?php echo "LABAT NUMBER is " . $xxoutput['labatnum'] ; ?>
	<br><br>
<?php echo "MICHEL NUMBER is " . $xxoutput['michelnum'] ; ?>
	<br><br>
<?php echo "PERIOD is " . $xxoutput['period'] ; ?>
	<br><br>
<?php echo "PROVENANCE is " . $xxoutput['provenance'] ; ?>
	<br><br>
<?php echo "VALUE is " . $xxoutput['value'] ; ?>
	<br><br>
<?php echo "IMAGE is " . $xxoutput['image_path'] ; ?>
	<br><br>

<p style = "text-align:center;"><button type = "submit" formaction = "OAEditmodification.php">EDIT</button>
<p style = "text-align:center;"><button type = "submit" formaction = "OAAddmodification.php">ADD</button>
<p style = "text-align:center;"><button type = "submit" formaction = "OANewmodification.html">NEW</button>

</div>
<div style = "color:#40eb34"  align "right">
<label for "L2T">LEFT 2-TOUCH <img src = "signimages/L2T.png" /> L2T </label>
<input type = "number" size = "1" id = "L2T" name = "L2T" min = "0" max = "50" value = "<?php echo $xxoutput['L2T']; ?>">
	<br>
<label for "R2T">RIGHT 2-TOUCH <img src = "signimages/R2T.png" /> R2T </label>
<input type = "number" size = "1" id = "R2T" name = "R2T" min = "0" max = "50" value = "<?php echo $xxoutput['R2T']; ?>">
	<br>
<label for "T2T">TOP 2-TOUCH <img src = "signimages/T2T.png" /> T2T </label>
<input type = "number" size = "1" id = "T2T" name = "T2T" min = "0" max = "50" value = "<?php echo $xxoutput['T2T']; ?>">
	<br>
<label for "B2T">BOTTOM 2-TOUCH <img src = "signimages/B2T.png" /> B2T </label>
<input type = "number" size = "1" id = "B2T" name = "B2T" min = "0" max = "50" value = "<?php echo $xxoutput['B2T']; ?>">
	<br><br>
<label for "H2T">HORIZONTAL 2-TOUCH <img src = "signimages/H2T.png" /> H2T </label>
<input type = "number" size = "1" id = "H2T" name = "H2T" min = "0" max = "50" value = "<?php echo $xxoutput['H2T']; ?>">
	<br>
<label for "V2T">VERTICAL 2-TOUCH <img src = "signimages/V2T.png" />  V2T </label>
<input type = "number" size = "1" id = "V2T" name = "V2T" min = "0" max = "50" value = "<?php echo $xxoutput['V2T']; ?>">
	<br>
<label for "O2T">OTHER 2-TOUCH  O2T </label>
<input type = "number" size = "1" id = "O2T" name = "O2T" min = "0" max = "50" value = "<?php echo $xxoutput['O2T']; ?>">
	<br><br>
<label for "NWC">NW-CORNER <img src = "signimages/NWC.png" />  NWC </label>
<input type = "number" size = "1" id = "NWC" name = "NWC" min = "0" max = "50" value = "<?php echo $xxoutput['NWC']; ?>">
	<br>
<label for "NEC">NE-CORNER <img src = "signimages/NEC.png" /> NEC </label>
<input type = "number" size = "1" id = "NEC" name = "NEC" min = "0" max = "50" value = "<?php echo $xxoutput['NEC']; ?>">
	<br>
<label for "SEC">SE-CORNER <img src = "signimages/SEC.png" /> SEC </label>
<input type = "number" size = "1" id = "SEC" name = "SEC" min = "0" max = "50" value = "<?php echo $xxoutput['SEC']; ?>">
	<br>
<label for "SWC">SW-CORNER  <img src = "signimages/SWC.png" /> SWC </label>
<input type = "number" size = "1" id = "SWC" name = "SWC" min = "0" max = "50" value = "<?php echo $xxoutput['SWC']; ?>">
	<br>
<label for "RMC">RIGHT MIDDLE CORNER <img src = "signimages/RMC.png" />  RMC </label>
<input type = "number" size = "1" id = "RMC" name = "RMC" min = "0" max = "50" value = "<?php echo $xxoutput['RMC']; ?>">
	<br>
<label for "TMC">TOP MIDDLE CORNER <img src = "signimages/TMC.png" />  TMC </label>
<input type = "number" size = "1" id = "TMC" name = "TMC" min = "0" max = "50" value = "<?php echo $xxoutput['TMC']; ?>">
	<br>	
<label for "BMC">BOTTOM MIDDLE CORNER <img src = "signimages/BMC.png" />  BMC </label>
<input type = "number" size = "1" id = "BMC" name = "BMC" min = "0" max = "50" value = "<?php echo $xxoutput['BMC']; ?>">
	<br>	
<label for "LMC">LEFT MIDDLE CORNER <img src = "signimages/LMC.png" /> LMC </label>
<input type = "number" size = "1" id = "LMC" name = "LMC" min = "0" max = "50" value = "<?php echo $xxoutput['LMC']; ?>">
	<br><br>
<label for "2C">2-CROSS <img src = "signimages/2C.png" /> 2C </label>
<input type = "number" size = "1" id = "2C" name = "2C" min = "0" max = "50" value = "<?php echo $xxoutput['2C']; ?>">
	<br><br>
<label for "3T"> 3-TOUCH  3T </label>
<input type = "number" size = "1" id = "3T" name = "3T" min = "0" max = "50" value = "<?php echo $xxoutput['3T']; ?>">
	<br>
<label for "4T"> 4-TOUCH  4T </label>
<input type = "number" size = "1" id = "4T" name = "4T" min = "0" max = "50" value = "<?php echo $xxoutput['4T']; ?>">
	<br><br>

<span style = "color: black">
<label for "UNKN"> UNKNOWN </label>
<input type = "number" size = "1" id = "UNKN" name = "UNKN" min = "0" max = "50" value = "<?php echo $xxoutput['UNKN']; ?>">
</span>
<br>

</div>
</div>

	</form>	
	</body>
</html>

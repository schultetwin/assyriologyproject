<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>fromoatvector.html</title>

     <style>
	*{box-sizing: border-box;}
	.title2{text-align: center; font-size: 2vw;}
	.intro2{text-align: center; font-size: 2vw;}
	.intro2 .mark1{color: red;}
	.intro2 .connectors1{color: #40eb34;} 

	.introfreqmarks {font-size: 2vw;}
	.introfreqconnectors {font-size: 2vw;}
			 
 @media all and (max-width: 419px){        
	form {
		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows: auto auto auto auto auto;} 	
            
	form .freqmarks{ grid-row: 1;}
	form .freqconnectors{ grid-row: 2;}

	form .controls{ grid-row: 3;}

	form .othermarks{ grid-row: 4;}
	form .otherconnectors{ grid-row: 5;}
			
	form .controls{background-color: #2690d4; color: white;}
	form .controls{text-align: center;}

	form .freqmarks{color: red; font-size: 2vw;}
	form .freqconnectors{color: #40eb34; font-size: 2vw;}

	form .othermarks{color: red; font-size: 2vw}
	form .otherconnectors{color:#40eb34; font-size: 2vw;}
                                                    

			
				}  



@media all and (min-width: 420px){        
	form {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: auto auto auto auto;} 	

            	form .freqmarks{grid-column: 1 / 2; grid-row: 1;}
	form .freqconnectors{grid-column: 2 / 3; grid-row: 1;}

	form .controls{grid-column: 1 /3; grid-row: 2;}	

	form .othermarks{grid-column:1 / 2; grid-row: 3;}
	form .otherconnectors{grid-column:2 / 3; grid-row: 3;}
			
	form .controls{background-color: #2690d4; color: white;}
	form .controls{text-align: center;}
	form .freqmarks{color: red; font-size: 1vw;}
	form .freqconnectors{color: #40eb34; font-size: 1vw;}
	form .othermarks{color: red; font-size: 1vw;}
	form .otherconnectors{color:#40eb34; font-size: 1vw;}
			}  

@media all and (min-width: 800px){
	form {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: auto auto auto auto;} 	
	form .freqmarks{grid-column: 1 / 2; grid-row: 1;}
	form .freqconnectors{grid-column: 3 / 4; grid-row: 1;}
	form .controls{grid-column: 1 /4; grid-row: 2;}
	form .othermarks{grid-column:1 / 2; grid-row: 3;}
	form .otherconnectors{grid-column:3 / 4; grid-row: 3;}
			
	form .controls{background-color: #2690d4; color: white;}
	form .controls{text-align: center;}
	form .freqmarks{color: red; font-size: 1vw;}
	form .freqconnectors{color: #40eb34; font-size: 1vw;}
	form .othermarks{color: red; font-size: 1vw;}
	form .otherconnectors{color:#40eb34; font-size: 1vw;}

			}

     </style>
</head>


<body>

<?php
$oatheorder = array('DV', 'RH', 'HE', 'RHBB', 'DVBB', 'OBB', 'DVHT', 'RHHT', 'OHT', 'RDD', 'RUD', 'LDD', 'LUD', 'LH', 'UV', 'LHBB', 'UVBB', 'DNGR', 'VL', 'UDL', 'HL', 'DDL', '2C', 'L2T', 'R2T', 'T2T', 'B2T', 'NWC', 'NEC', 'SEC', 'SWC', 'O2T', '3T', '4T', 'H2T', 'V2T', 'RMC', 'TMC', 'BMC', 'LMC', 'UNKN');

?>		

<div class="title2" id="title2"><b>OLD ASSYRIAN, KANESH</b></div>
<div class="intro2" id="intro2">
	<b>Enter your counts of <div class="mark1">MARKS</div> and 
	<div class="connectors1">CONNECTORS</div> below.</b>
<p>Then click on the <b>NEXT</b> button halfway down below to see the resulting candidate signs.</p>
</div>
		  
	<form id="form" action="oatvector.php" method="POST">

		<div class="freqmarks" id="freqmarks">
		<div class="introfreqmarks" id="introfreqmarks">
		<p>The following are the marks that occur the most frequently.</p>
		<p>The others marks are farther down.</p>
		</div>
		<div class="bodyfreqmarks" id="bodyfreqmarks">
					
<label for "DV">DOWN VERTICAL <img src = "signimages/DV.png" /> DV </label> <br>
<input  type = "number"  size = "1" id = "DV" name = "DV" min = "0" max = "50" value = "0">
	<br>

<label for "RH">RIGHT HORIZONTAL  <img src = "signimages/RH.png" />   RH </label><br>
<input type = "number" size = "1" id = "RH" name = "RH" min = "0" max = "50" value = "0">
	<br>

<label for "HE">HEEL <img src = "signimages/HE.png" />  HE </label><br>
<input type = "number" size = "1" id = "HE" name = "HE" min = "0" max = "50" value = "0">
	<br>

<label for "RHBB">RIGHT HORIZONTAL BARBELL  <img src = "signimages/RHBB.png" /> RHBB </label><br>
<input type = "number" size = "1" id = "RHBB" name = "RHBB" min = "0" max = "50" value = "0">
	<br>

<label for "DVBB">DOWN VERTICAL BARBELL <img src = "signimages/DVBB.png" /> DVBB </label><br>
<input type = "number" size = "1" id = "DVBB" name = "DVBB" min = "0" max = "50" value = "0">
	<br>

<label for "OBB">OTHER BARBELL   OBB (Neither horizontal nor vertical.) </label><br>
<input type = "number" size = "1" id = "OBB" name = "OBB" min = "0" max = "50" value = "0">
	<br>

<label for "DVHT">DOWN VERTICAL HEAD-TO-TAIL  <img src = "signimages/DVHT.png" />  DVHT </label><br>
<input type = "number" size = "1" id = "DVHT" name = "DVHT" min = "0" max = "50" value = "0">
	<br>

<label for "RHHT">RIGHT HORIZONTAL HEAD-TO-TAIL  <img src = "signimages/RHHT.png" /> RHHT </label><br>
<input type = "number" size = "1" id = "RHHT" name = "RHHT" min = "0" max = "50" value = "0">
	<br>

<label for "OHT">OTHER HEAD-TO-TAIL   OHT (Neither horizontal nor vertical.) </label><br>
<input type = "number" size = "1" id = "OHT" name = "OHT" min = "0" max = "50" value = "0">
	<br>

<label for "RDD">RIGHT DOWN DIAGONAL <img src = "signimages/RDD.png" /> RDD </label><br>
<input type = "number" size = "1" id = "RDD" name = "RDD" min = "0" max = "50" value = "0">
	<br>

<label for "RUD">RIGHT UP DIAGONAL <img src = "signimages/RUD.png" /> RUD </label><br>
<input type = "number" size = "1" id = "RUD" name = "RUD" min = "0" max = "50" value = "0"><br>

</div>
</div>
			<div class="freqconnectors" id="freqconnectors" >
			<div class="introfreqconnectors" id="introfreqconnectors">
			<p>The following are the connectors that occur the most frequently. </p>
			<p>The other connectors are farther down. </p>
</div>
			<div class = "bodyfreqconnectors" id = "bodyfreqconnectors" >


<label for "2C">2-CROSS <img src = "signimages/2C.png" /> 2C </label><br>
<input type = "number" size = "1" id = "2C" name = "2C" min = "0" max = "50" value = "0">
	<br>

<label for "L2T">LEFT 2-TOUCH <img src = "signimages/L2T.png" /> L2T </label><br>
<input type = "number" size = "1" id = "L2T" name = "L2T" min = "0" max = "50" value = "0">
	<br>

<label for "R2T">RIGHT 2-TOUCH <img src = "signimages/R2T.png" /> R2T </label><br>
<input type = "number" size = "1" id = "R2T" name = "R2T" min = "0" max = "50" value = "0">
	<br>

<label for "T2T">TOP 2-TOUCH <img src = "signimages/T2T.png" /> T2T </label><br>
<input type = "number" size = "1" id = "T2T" name = "T2T" min = "0" max = "50" value = "0">
	<br>

<label for "B2T">BOTTOM 2-TOUCH <img src = "signimages/B2T.png" /> B2T </label><br>
<input type = "number" size = "1" id = "B2T" name = "B2T" min = "0" max = "50" value = "0">
	<br>

<label for "NWC">NW-CORNER <img src = "signimages/NWC.png" />  NWC </label><br>
<input type = "number" size = "1" id = "NWC" name = "NWC" min = "0" max = "50" value = "0">
	<br>

<label for "NEC">NE-CORNER <img src = "signimages/NEC.png" /> NEC </label><br>
<input type = "number" size = "1" id = "NEC" name = "NEC" min = "0" max = "50" value = "0">
	<br>

<label for "SEC">SE-CORNER <img src = "signimages/SEC.png" /> SEC </label><br>
<input type = "number" size = "1" id = "SEC" name = "SEC" min = "0" max = "50" value = "0">
	<br>

<label for "SWC">SW-CORNER  <img src = "signimages/SWC.png" /> SWC </label><br>
<input type = "number" size = "1" id = "SWC" name = "SWC" min = "0" max = "50" value = "0">
	<br>

<label for "O2T">OTHER 2-TOUCH  O2T (One or both of the marks are not horizontal or vertical.)</label><br>
<input type = "number" size = "1" id = "O2T" name = "O2T" min = "0" max = "50" value = "0">
	<br>

</div>
</div>



			 <div id="controls" class="controls">
		<label for "MAXDT"> MAXIMUM DISTANCE  MAXDT </label><br>
<input  type = "number"  size = "1" id = "MAXDT" name = "MAXDT" min = "0" max = "100" value = "3">	
            <p>MAXDT's default value is 3.  Larger MAXDTs widen your search, smaller ones narrow it.</p>
                                      <input type = "submit" name = "submit" value = "NEXT"> 
			 </div>
		 	  
			<div class="othermarks" id="othermarks" >
			<div class="introothermarks" id="introothermarks" >
			<p> OTHER MARKS: </p>
			</div>
			<div class = "bodyothermarks"  id = "bodyothermarks" >

<label for "LDD">LEFT DOWN DIAGONAL <img src = "signimages/LDD.png" /> LDD </label><br>
<input type = "number" size = "1" id = "LDD" name = "LDD" min = "0" max = "50" value = "0">
	<br>

<label for "LUD">LEFT UP DIAGONAL  <img src = "signimages/LUD.png" /> LUD </label><br>
<input type = "number" size = "1" id = "LUD" name = "LUD" min = "0" max = "50" value = "0">
	<br>

<label for "LH">LEFT HORIZONTAL <img src = "signimages/LH.png" /> LH </label><br>
<input type = "number" size = "1" id = "LH" name = "LH" min = "0" max = "50" value = "0">
	<br>

<label for "UV">UP VERTICAL  <img src = "signimages/UV.png" /> UV </label><br>
<input type = "number" size = "1" id = "UV" name = "UV" min = "0" max = "50" value = "0">
	<br>
	
<label for "LHBB">LEFT HORIZONTAL BARBELL  <img src = "signimages/LHBB.png" /> LHBB </label><br>
<input type = "number" size = "1" id = "LHBB" name = "LHBB" min = "0" max = "50" value = "0">
	<br>

<label for "UVBB">UP VERTICAL BARBELL  <img src = "signimages/UVBB.png" />  UVBB </label><br>
<input type = "number" size = "1" id = "UVBB" name = "UVBB" min = "0" max = "50" value = "0">
	<br>     

<label for "LHHT">LEFT HORIZONTAL HEAD-TO-TAIL  <img src = "signimages/LHHT.png" /> LHHT </label><br>
<input type = "number" size = "1" id = "LHHT" name = "LHHT" min = "0" max = "50" value = "0">
	<br>

<label for "UVHT">UP VERTICAL HEAD-TO-TAIL  <img src = "signimages/UVHT.png" />  UVHT </label><br>
<input type = "number" size = "1" id = "UVHT" name = "UVHT" min = "0" max = "50" value = "0">
	<br>

<label for "DNGR">DINGER <img src = "signimages/DNGR.png" /> DNGR </label><br>
<input type = "number" size = "1" id = "DNGR" name = "DNGR" min = "0" max = "50" value = "0">
	<br>

<label for "VL">VERTICAL LINE <img src = "signimages/VL.png" />  VL </label><br>
<input type = "number" size = "1" id = "VL" name = "VL" min = "0" max = "50" value = "0">
	<br>

<label for "UDL">UP DIAGONAL LINE <img src = "signimages/UDL.png" /> UDL </label><br>
<input type = "number" size = "1" id = "UDL" name = "UDL" min = "0" max = "50" value = "0">
	<br>

<label for "HL">HORIZONTAL LINE <img src = "signimages/HL.png" /> HL </label><br>
<input type = "number" size = "1" id = "HL" name = "HL" min = "0" max = "50" value = "0">
	<br>

<label for "DDL">DOWN DIAGONAL LINE <img src = "signimages/DDL.png" /> DDL </label><br>
<input type = "number" size = "1" id = "DDL" name = "DDL" min = "0" max = "50" value = "0">
	<br>
	
</div>
</div>
		
		
		
			


			<div id="otherconnectors" class="otherconnectors">
			<div id="introotherconnectors" class="introotherconnectors">
			<p> OTHER CONNECTORS: </p>
			</div>
			<div id="bodyotherconnectors" class="bodyotherconnectors">

<label for "3T"> 3-TOUCH  3T </label><br>
<input type = "number" size = "1" id = "3T" name = "3T" min = "0" max = "50" value = "0">
	<br>

<label for "4T"> 4-TOUCH  4T </label><br>
<input type = "number" size = "1" id = "4T" name = "4T" min = "0" max = "50" value = "0">
	<br>	        

<label for "H2T">HORIZONTAL 2-TOUCH <img src = "signimages/H2T.png" /> H2T </label><br>
<input type = "number" size = "1" id = "H2T" name = "H2T" min = "0" max = "50" value = "0">
	<br>

<label for "V2T">VERTICAL 2-TOUCH <img src = "signimages/V2T.png" />  V2T </label><br>
<input type = "number" size = "1" id = "V2T" name = "V2T" min = "0" max = "50" value = "0">
	<br>

<label for "RMC">RIGHT MIDDLE CORNER <img src = "signimages/RMC.png" />  RMC </label><br>
<input type = "number" size = "1" id = "RMC" name = "RMC" min = "0" max = "50" value = "0">
	<br>

<label for "TMC">TOP MIDDLE CORNER <img src = "signimages/TMC.png" />  TMC </label><br>
<input type = "number" size = "1" id = "TMC" name = "TMC" min = "0" max = "50" value = "0">
	<br>	

<label for "BMC">BOTTOM MIDDLE CORNER <img src = "signimages/BMC.png" />  BMC </label><br>
<input type = "number" size = "1" id = "BMC" name = "BMC" min = "0" max = "50" value = "0">
	<br>	

<label for "LMC">LEFT MIDDLE CORNER <img src = "signimages/LMC.png" /> LMC </label><br>
<input type = "number" size = "1" id = "LMC" name = "LMC" min = "0" max = "50" value = "0">
	<br><br>

<label for "UNKN"> UNKNOWN  UNKN</label><br>
<input type = "number" size = "1" id = "UNKN" name = "UNKN" min = "0" max = "50" value = "0">

</div>
</div>
               
</form>



<p>
The following is an experimental setup for searching by value and other values instead of by counts.  Everything seems to be working.  However, because of the elaborate way that the original other values were entered for many signs in Neo-Babylonian they are invisible to searches.  Therefore, an additional visible sign or signs are appended after a colon to the original other values entry.  It or they are the target of a search, and the search result includes, fortunately, the original other values.  Thus, this alteration is transparent to the user except that the user can see the colon followed by the additions.  (This is done for a few other signs elsewhere in the system for various reasons.) A logogram sign with more than one vowel in its transliteration can have its diacritic on anyone of them.  This is not a problem for a reader but is for a computer; therefore, all placements of diacritics are included in the other values; for example, GÉME and GEMÉ.  I have changed the collations of the two searches so that each is now accent and case sensitive.  This means you have to input exactly what you want to find. You can copy the needed accented letters, subscripts, and superscripts displayed to the right of the NEXT buttons.   A blank screen means that nothing was found.  The id in the output merely identifies the row in the table.  The user can ignore it.
</p>


<form id="searchoabyvalueform" action="searchoaxbyvalue.php" method="POST">
<div style = "text-align:center;">
<label for "SEARCHBYVALUE"> Search by value</label><br>
<input type = "text" size = "20"  max = "50" id = "SEARCHBYVALUE" name = "SEARCHBYVALUE"><br>
<input type = "submit" name = "submit" value = "NEXT"> á à â ā ᵈ é è ê ē ᶠ ᵍ <sup>giš</sup> <sup>há</sup> ⁱ í ì î ī  <sup>ki</sup>  <sup>na₄</sup>  ˢ  š ṣ ṭ ú ù û ū ᶻ ₀ ₁ ₂ ₃ ₄ ₅ ₆ ₇ ₈ ₉ ⁽ ⁾
</div>
</form>

<form id="searchoabyotherform" action="searchoaxbyother.php" method="POST">
<div style = "text-align:center;">
<label for "SEARCHBYOTHER"> Search by other value</label><br>
<input type = "text" size = "20"  max = "50" id = "SEARCHBYOTHER" name = "SEARCHBYOTHER"><br>
<input type = "submit" name = "submit" value = "NEXT">  Á À É È Í Ì Š Ṣ Ṭ Ú Ù Ȗ Ū
</div>
</form>


			
  </body>
</html>     
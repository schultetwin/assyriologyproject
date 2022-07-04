<?php 
  //Starting session
  session_start();
/*This creates for this user a temporay global associative array $_SESSION in the server which is accessible from all pages. The user can write and read key-value pairs to and from it.*/
?>
<!-- What follows is html until php script is started.  -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

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
<!--There are two ways to arrive at this page.  The first way is by pressing the submit button (name "modify1") on the previous page.  This will always be the first arrival.  The second way is by pressing the modify button (name "modify2") below on this page.  The global variable $_POST is used in both case and is not the same value in both cases.     -->

<?php /* This is just a short script for connecting to the database.  */
$conn = mysqli_connect('127.0.0.1', 'root', '', 'dbassyriology', '3308');
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();}
?>
<!-- Now we are back to html. -->
<div class="title2" id="title2"><b>NEO BABYLONIAN SIGN MODIFICATION</b></div>



<p> 
This system is meant to evolve as it is used, with the users modifying and adding sign information. At the moment this capability is limited as follows:
 </p>
<p>  
There is an easy modification and other not so easy ones. In the easy one the sign image remains exactly the same.  In particular, each type of  mark and each type of connector is correctly titeled in the image.  The problem is that these counts were entered into the database incorrectly.  A way to correct this is provided below.
 </p>
<p>
In the next kind of modification the sign image looks the same, but some titles of marks or connectors need to be changed.  To do so requires--currently--a knowledge of svg images (Scalable Vector Graphics).  The images are accessible here, and making the changes is simple using Inkscape or the like.  Otherwise, just send me an email message.  Eventually I am going to provide a way for the user to do this without having to use Inkscape or the like.
</p>
<p>  
Finally, the sign image may have to be replaced or a new one created.  Everything is accessible here, but to do so requires a lot of computer knowhow, and that is asking a lot of a user.  Just send me an email message.
</p>

<p>CORRECTING COUNTS IN THE DATABASE</p>
<p>The following--Array(...)--is the complete current row from the nbxvectors table of the database for this candidate.  It is displayed for reference.  Note that it shows the current counts, the ones that you presumably want to modify. If you do press MODIFY below, then a second Array(...) will be displayed which shows your new counts for this candidate.  You can compare the old counts with the new counts. Also note that you can enter another modification if you so desire.  Indeed there is no limit to the number modifications you can enter.</p>


<?php

if (isset($_POST["modify1"])){ 
/* The above line is checking if the global variable $_POST has been set by the button modify1 on the previous page.  If so, the php/html script below in {...} will be executed; otherwise, this script will be ignored. */
/* The next lines undo the encoding done on the previous page.     */ 
$xxoutput = array( );
$xxoutput = unserialize(base64_decode($_POST['xencoded']));
/* The next line clears $_POST of all the encoded stuff that came from the previous page. */
unset($_POST['xencoded']); print_r($_POST);
/* The variable $xxoutput is what we need, but when we come back to this page by pressing button modify2 it will be lost.  We need to remember it; that is, we need to use the global array $_SESSION. The following line stores the key-value pair xxoutput-$xxoutput in global array $_SESSION.  This is what we use to remember between the pages. */ 
$_SESSION["xxoutput"] = $xxoutput;} /* This "}" is the end of the php/html script associated with the above if-isset statement.  However, we are still in php.*/
/* The following variable identifies exactly which row in the nbxvectors table you are modifying.  */
$id = $_SESSION["xxoutput"]['id'];
/* The next line prints out Array(...).   */
print_r($_SESSION["xxoutput"]);

/* If the modify2 button has been pushed, the next if-isset line starts the execution of the following new php script {...}.   */
 if (isset($_POST["modify2"])){print_r($_POST);  
 foreach($_POST as $key3 => $value3){ "UPDATE nbxvectors SET $value3 = $_POST[$value3]  WHERE id = $id "; } }

/* The next lines print out the now modified row.   */
$sql = "SELECT * FROM nbxvectors WHERE id = $id ";                                          
if ($result = mysqli_query($conn, $sql))                                        
WHILE ($row = mysqli_fetch_assoc($result)){                                     
	print_r($row);}
 ?>


<div class="intro2" id="intro2">
	<b>Enter your replacement counts of <div class="mark1">MARKS</div> and 
	<div class="connectors1">CONNECTORS</div> below.</b>
<p>Then click on the <b>MODIFY</b> button halfway down below to see the resulting candidate signs.</p>
</div> 
	<form id="form" action="" method="POST">

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
		
                                      <input type = "submit" name = "modify2" id="modify2" value = "MODIFY">  
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



</body>
</html>
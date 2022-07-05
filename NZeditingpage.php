<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	</head>
	<body>


<?php
require('database.php');
$conn = getMysqliConnection();
?>

<p> 
This system is meant to evolve as it is used, with the users modifying and adding sign information. At the moment this capability is limited as follows:
 </p>
<p>  
There is an easy modification and other not so easy ones. In the easy one the sign image remains exactly the same.  In particular, number of each type of  mark and each type of connector is specified in the image.  The problem is that these counts were entered into the database incorrectly.  A way to correct this is provided here.
 </p>
<p>
In the next kind of modification the sign image looks the same, but some titles of marks or connectors need to be changed.  To do so requires--currently--a knowledge of svg images (Scalable Vector Graphics).  The images are accessible here, and making the changes is simple using Inkscape or the like.  Otherwise, just send me an email message.
</p>
<p>  
Finally, the sign image may have to be replaced or a new one created.  Everything is accessible here, but to do so requires a lot of computer knowhow, and that is asking a lot of a user.  Just send me an email message.
</p>

</body>
</html>

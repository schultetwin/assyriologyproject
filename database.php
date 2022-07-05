<?php

require('db_params.php')

function getMysqliConnection() {
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, '3308');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
    }
    return $conn;
}

?>

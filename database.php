<?php

require('db_params.php');

function getMysqliConnection() {
    global $db_host, $db_user, $db_pass, $db_name;
    $mysqli = mysqli_init();
    if (!$mysqli) {
        die("mysqli_init failed");
    }

    $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
    $mysqli->real_connect($db_host, $db_user, $db_pass, $db_name);
    return $mysqli;
}

?>

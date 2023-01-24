<?php

function getMysqliConnection() {
    global $db_host, $db_user, $db_pass, $db_name;
    $mysqli = mysqli_init();
    if (!$mysqli) {
        die("mysqli_init failed");
    }

    $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
    $mysqli->real_connect($_ENV["MYSQL_HOST"], $_ENV["MYSQL_USERNAME"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DATABASE"]);
    return $mysqli;
}

?>

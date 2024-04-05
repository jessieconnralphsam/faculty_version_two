<?php

$db_host = "localhost";
$db_port = "5432";
$db_name = "faculty";
$db_user = "postgres";
$db_password = "postgres";

$conn = pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// echo "Connected successfully";

?>

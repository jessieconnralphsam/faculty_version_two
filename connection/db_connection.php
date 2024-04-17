<?php

$db_host = "localhost";
$db_port = "5432";
$db_name = "faculty";
$db_user = "faculty_select";
$db_password = '6M7$nT#pK*2j!uZ';

$conn = pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

?>

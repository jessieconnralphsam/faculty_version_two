<?php

if (pg_connection_status($conn) !== PGSQL_CONNECTION_OK) {
    die("Connection error: " . pg_last_error($conn));
}

$sql = "SELECT * FROM public.faculty WHERE dean = $1";

$stmt = pg_prepare($conn, "get_dean_faculty", $sql);

if (!$stmt) {
    die("Error preparing SQL statement: " . pg_last_error($conn));
}

$result = pg_execute($conn, "get_dean_faculty", array(true));

if (!$result) {
    die("Error in SQL query: " . pg_last_error($conn));
}

$num_rows = pg_num_rows($result);

?>

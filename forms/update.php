<?php
$host = "localhost";
$port = "5432";
$dbname = "faculty";
$user = "postgres";
$password = "postgres";

$connString = "host=$host port=$port dbname=$dbname user=$user password=$password";
$conn = pg_connect($connString);

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $facultyName = $_POST['faculty_name'];
    $status = $_POST['status'];
    $email = $_POST['email'];

    $updateQuery = "UPDATE Faculty SET status='$status', email='$email' WHERE name='$facultyName'";

    $result = pg_query($conn, $updateQuery);

    if ($result) {
        header("Location: status.php");
        exit;
    } else {
        echo "Error updating record: " . pg_last_error($conn);
    }
}

pg_close($conn);
?>

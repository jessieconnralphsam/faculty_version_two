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
    if (!isset($_POST['faculty_name'])) {
        die("Missing required parameter: faculty_name");
    }

    $facultyName = $_POST['faculty_name'];

    $updateQuery = "UPDATE Faculty SET ";
    $params = array();

    if (isset($_POST['status'])) {
        $updateQuery .= "status=$1, ";
        $params[] = $_POST['status'];
    }
    if (isset($_POST['email'])) {
        $updateQuery .= "email=$2, ";
        $params[] = $_POST['email'];
    }
    if (isset($_POST['specialization'])) {
        $updateQuery .= "specialization=$3, ";
        $params[] = $_POST['specialization'];
    }
    if (isset($_POST['research'])) {
        $updateQuery .= "research=$4, ";
        $params[] = $_POST['research'];
    }
    if (isset($_POST['google_scholar_link'])) {
        $updateQuery .= "google_scholar_link=$5, ";
        $params[] = $_POST['google_scholar_link'];
    }
    if (isset($_POST['education'])) {
        $updateQuery .= "education=$6, ";
        $params[] = $_POST['education'];
    }
    if (isset($_POST['first_name'])) {
        $updateQuery .= "first_name=$7, ";
        $params[] = $_POST['first_name'];
    }
    if (isset($_POST['middle_name'])) {
        $updateQuery .= "middle_name=$8, ";
        $params[] = $_POST['middle_name'];
    }
    if (isset($_POST['last_name'])) {
        $updateQuery .= "last_name=$9, ";
        $params[] = $_POST['last_name'];
    }
    if (isset($_POST['suffix'])) {
        $updateQuery .= "suffix=$10, ";
        $params[] = $_POST['suffix'];
    }

    $updateQuery = rtrim($updateQuery, ", ");

    $updateQuery .= " WHERE name=$" . (count($params) + 1);
    $params[] = $facultyName;

    $result = pg_query_params($conn, $updateQuery, $params);

    if ($result) {
        header("Location: status.php");
        exit;
    } else {
        echo "Error updating record: " . pg_last_error($conn);
    }
}

pg_close($conn);
?>

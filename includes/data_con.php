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

$query = "
    SELECT
    F.name AS faculty_name,
    C.college_name,
    D.department_name,
    F.email,
    F.specialization,
    F.research,
    F.google_scholar_link,
    F.rank,
    F.dean,
    F.photo,
    F.status
    FROM
    Faculty F
    JOIN
    College C ON F.collegeID = C.collegeID
    JOIN
    Department D ON F.departmentID = D.departmentID;
";
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error());
}

$facultyData = array();
$profRanks = 0;
$astproRanks = 0;
$asoproRanks = 0;
$instRanks = 0;

//-------------------------

$permanentCount = 0;
$casualCount = 0;
$lecturerCount = 0;

$totalFacultyCount = pg_num_rows($result);

while ($row = pg_fetch_assoc($result)) {
    $faculty = array(
        'faculty_name' => $row['faculty_name'],
        'college_name' => $row['college_name'],
        'department_name' => $row['department_name'],
        'email' => $row['email'],
        'specialization' => $row['specialization'],
        'research' => $row['research'],
        'google_scholar_link' => $row['google_scholar_link'],
        'rank' => $row['rank'],
        'dean' => $row['dean'],
        'photo' => $row['photo'],
        'status' => $row['status']
    );

    if (strpos($row['rank'], 'PROF') === 0) {
        $profRanks++; 
    }
    if (strpos($row['rank'], 'ASTPRO') === 0) {
        $astproRanks++; 
    }
    if (strpos($row['rank'], 'ASOPRO') === 0) {
        $asoproRanks++; 
    }
    if (strpos($row['rank'], 'INST') === 0) {
        $instRanks++; 
    }
    if ($row['status'] !== null && strpos($row['status'], 'casual') === 0) {
        $casualCount++;
    }
    if ($row['status'] !== null && strpos($row['status'], 'permanent') === 0) {
        $permanentCount++;
    }
    if ($row['status'] !== null && strpos($row['status'], 'lecturer') === 0) {
        $lecturerCount++;
    }
    $facultyData[] = $faculty;
}
pg_close($conn);

?>

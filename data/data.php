<?php
include('../connection/db_connection.php');

$sql = "SELECT
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
            Department D ON F.departmentID = D.departmentID";

$result = pg_query($conn, $sql);

if ($result) {
    $dean_faculty_names = array();
    $dean_faculty_info = array();
    
    while ($row = pg_fetch_assoc($result)) {
        if ($row['dean'] === 't') {
            $dean_faculty_names[] = $row['faculty_name'];
            $dean_faculty_info[] = array(
                'faculty_name' => $row['faculty_name'],
                'college_name' => $row['college_name'],
                'photo' => $row['photo']
            );
        }
    }

    foreach ($dean_faculty_info as $info) {
        echo "Name: " . $info['faculty_name'] . ", College: " . $info['college_name'] . ", Photo: " . $info['photo'] . "<br>";
    }
} else {
    echo "Error executing query: " . pg_last_error($conn);
}



pg_close($conn);
?>

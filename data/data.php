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

if (!$result) {
    echo "Query execution failed.";
} else {

    while ($row = pg_fetch_assoc($result)) {
        echo "Faculty Name: " . $row['faculty_name'] . "<br>";
        echo "College Name: " . $row['college_name'] . "<br>";
        echo "Department Name: " . $row['department_name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Specialization: " . $row['specialization'] . "<br>";
        echo "Research: " . $row['research'] . "<br>";
        echo "Google Scholar Link: " . $row['google_scholar_link'] . "<br>";
        echo "Rank: " . $row['rank'] . "<br>";
        echo "Dean: " . $row['dean'] . "<br>";
        echo "Photo: " . $row['photo'] . "<br>";
        echo "Status: " . $row['status'] . "<br><br>";
    }
}

// Close the connection
pg_close($conn);

?>

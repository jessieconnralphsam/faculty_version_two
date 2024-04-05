<?php
$sql = "SELECT
            d.department_name,
            COUNT(f.facultyid) AS faculty_count
        FROM 
            public.college c
        LEFT JOIN 
            public.faculty f ON c.collegeid = f.collegeid
        LEFT JOIN 
            public.department d ON f.departmentid = d.departmentid
        WHERE
            c.college_name = 'College of Natural Science and Mathematics'
        GROUP BY 
            d.department_name
        ORDER BY 
            d.department_name";

$result = pg_query($conn, $sql);

if ($result) {
    if (pg_num_rows($result) > 0) {
        while ($row = pg_fetch_assoc($result)) {
            echo "<strong>" . $row['department_name'] . " (" . $row['faculty_count'] . ")</strong><br>";
        }
    } else {
        echo "<div class='col-md-12'>No departments found for College of Natural Science and Mathematics.</div>";
    }
} else {
    echo "<div class='col-md-12'>Error executing query: " . pg_last_error($conn) . "</div>";
}

pg_close($conn);
?>

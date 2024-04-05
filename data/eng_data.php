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
            c.college_name = 'College of Engineering'
        GROUP BY 
            d.department_name
        ORDER BY 
            d.department_name";

$result = pg_query($conn, $sql);

if ($result) {
    while ($row = pg_fetch_assoc($result)) {
        $departmentName = $row['department_name'];
        $facultyCount = $row['faculty_count'];

        echo "<strong>" . $departmentName . " (" . $facultyCount . ")</strong><br>";

        $facultySql = "SELECT
                            F.name AS faculty_name,
                            F.photo
                        FROM
                            public.faculty F
                        JOIN
                            public.department D ON F.departmentid = D.departmentid
                        WHERE
                            D.department_name = '$departmentName'";
        $facultyResult = pg_query($conn, $facultySql);

        if ($facultyResult && pg_num_rows($facultyResult) > 0) {
            echo '<div class="py-4">'; 
            echo '<div class="row">'; 
            while ($facultyRow = pg_fetch_assoc($facultyResult)) {
                $facultyName = $facultyRow['faculty_name'];
                $photoSrc = ($facultyRow['photo'] == null) ? 'assets/img/660f6e5997de4_def.jpg' : 'forms/' . $facultyRow['photo'];

                echo '
                    <div class="col py-2">
                        <div class="container py-2 bg-white rounded custom-container border" onclick="redirect(\'' . $departmentName . '\')">
                            <img src="' . $photoSrc . '" class="rounded img-fluid" alt="...">
                            <h6 class="text-center mt-2 maroon"><strong>' . $departmentName . '</strong></h6>
                            <div class="container" style="display: flex; justify-content: center;">
                                <div style="width: 30%;">
                                    <hr style="width: 100%; border: 1px solid;">
                                </div>
                            </div>
                            <h6 class="text-center"><strong>' . $facultyName . '</strong></h6>
                        </div>
                    </div>';
            }
            echo '</div>';
            echo '</div>'; 
        } else {
            echo '<div class="col-md-12">No faculty found for ' . $departmentName . '</div>';
        }

        pg_free_result($facultyResult);
    }
    pg_free_result($result);
} else {
    echo "Error executing query: " . pg_last_error($conn);
}
?>

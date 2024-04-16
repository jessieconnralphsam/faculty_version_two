<?php
$facultyName = $_GET['name'];
$escapedFacultyName = pg_escape_string($conn, $facultyName);
$facultySql = "SELECT
                    F.name AS faculty_name,
                    F.photo,
                    F.rank,
                    F.google_scholar_link,
                    F.specialization,
                    F.research,
                    F.education,
                    F.first_name,
                    F.last_name,
                    F.middle_name,
                    F.suffix,
                    F.email,
                    F.collegeid,
                    D.department_name
                FROM
                    public.faculty F
                JOIN
                    public.department D ON F.departmentid = D.departmentid
                WHERE
                    F.name = '$escapedFacultyName'";
$result = pg_query($conn, $facultySql);
if (!$result) {
    die("Error in SQL query: " . pg_last_error());
}
while ($row = pg_fetch_assoc($result)) {
    $rankMap = array(
        "LECT   " => "Lecturer",
        "PROF1  " => "Professor",
        "PROF2  " => "Professor",
        "PROF3  " => "Professor",
        "PROF4  " => "Professor",
        "PROF5  " => "Professor",
        "PROF6  " => "Professor",
        "MTEACH2" => "Master Teacher",
        "TEACH1 " => "Teacher",
        "TEACH2 " => "Teacher",
        "TEACH3 " => "Teacher",
        "ASTPRO1" => "Assistant Professor",
        "ASTPRO3" => "Assistant Professor",
        "ASTPRO4" => "Assistant Professor",
        "ASOPRO1" => "Associate Professor",
        "ASOPRO2" => "Associate Professor",
        "ASOPRO3" => "Associate Professor",
        "ASOPRO4" => "Associate Professor",
        "ASOPRO5" => "Associate Professor",
        "INST1  " => "Instructor",
        "INST2  " => "Instructor",
        "INST3  " => "Instructor"
    );
    switch ($row['collegeid']) {
        case 1:
            $college = 'College of Engineering';
            $college_abbreviation = 'COE';
            break;
        case 2:
            $college = 'College of Agriculture';
            $college_abbreviation = 'COA';
            break;
        case 3:
            $college = 'College of Social Sciences and Humanities';
            $college_abbreviation = 'CSSH';
            break;
        case 4:
            $college = 'College of Medicine';
            $college_abbreviation = 'COM';
            break;
        case 5:
            $college = 'College of Business Administration and Accountancy';
            $college_abbreviation = 'CB&A';
            break;
        case 6:
            $college = 'College of Fisheries';
            $college_abbreviation = 'COF';
            break;
        case 7:
            $college = 'College of Natural Science and Mathematics';
            $college_abbreviation = 'CNSM';
            break;
        case 8:
            $college = 'School of Graduate Studies';
            $college_abbreviation = 'SGS';
            break;
        case 9:
            $college = 'College of Education';
            $college_abbreviation = 'CoED';
            break;
        default:
            $college = 'Unknown College';
            $college_abbreviation = 'UNK';
    }

    
    $facultyName = $row['faculty_name'];
    $department = $row['department_name'];
    $email = $row['email'];
    $rank = $row['rank'];
    $first_name = $row['first_name'];
    $middle_name = $row['middle_name'];
    $last_name = $row['last_name'];
    $suffix = $row['suffix'];
    $google = $row['google_scholar_link'];
    $research = $row['research'];
    $specialization = $row['specialization'];
    $education = $row['education'];
    $photoSrc = ($row['photo'] == null) ? 'assets/img/660f6e5997de4_def.jpg' : 'forms/' . $row['photo'];
    $transformedRank = isset($rankMap[$rank]) ? $rankMap[$rank] : $rank;
    
}

pg_free_result($result);

pg_close($conn);
?>
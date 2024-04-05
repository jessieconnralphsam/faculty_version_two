<?php

$sql = "SELECT
    F.name AS faculty_name,
    C.college_name,
    F.photo
FROM
    Faculty F
JOIN
    College C ON F.collegeID = C.collegeID
WHERE
    F.dean = 't'";
$result = pg_query($conn, $sql);

if ($result) {
    while ($row = pg_fetch_assoc($result)) {
        if ($row['photo'] == null) {
            $photoSrc = 'assets/img/660f6e5997de4_def.jpg';
        } else {
            $photoSrc = 'forms/' . $row['photo'];
        }

        switch ($row['college_name']) {
            case 'College of Agriculture':
                $deanText = 'Dean of COA';
                break;
            case 'College of Engineering':
                $deanText = 'Dean of COE';
                break;
            case 'College of Social Sciences and Humanities':
                $deanText = 'Dean of CSSH';
                break;
            case 'College of Medicine':
                $deanText = 'Dean of COM';
                break;
            case 'College of Business Administration and Accountacy':
                $deanText = 'Dean of Ba&A';
                break;
            case 'College of Fisheries':
                $deanText = 'Dean of COF';
                break;
            case 'College of Natural Science and Mathematics':
                $deanText = 'Dean of CNSM';
                break;
            case 'School of Graduate Studies':
                $deanText = 'Dean of SGS';
                break;
            case 'College of Education':
                $deanText = 'Dean of COeD';
                break;
            default:
                $deanText = 'No Match';
        }

        echo '<div class="col py-2">
                <div class="container py-2 bg-white rounded custom-container border" onclick="redirect(\'' . $row['college_name'] . '\')">
                  <img src="' . $photoSrc . '" class="rounded img-fluid" alt="...">
                  <h6 class="text-center mt-2 maroon"><strong>' . $row['college_name'] . '</strong></h6>
                  <div class="container" style="display: flex; justify-content: center;">
                      <div style="width: 30%;">
                          <hr style="width: 100%; border: 1px solid;">
                      </div>
                  </div>
                  <h6 class="text-center"><strong>' . $row['faculty_name'] . '</strong></h6>
                  <h6 class="text-center">' . $deanText . '</h6>
                </div>
            </div>';
    }
    pg_free_result($result);
} else {
    echo "Error executing query: " . pg_last_error($conn);
}
?>

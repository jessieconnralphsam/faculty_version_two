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
        c.college_name = 'School of Graduate Studies'
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
                            F.photo,
                            F.rank,
                            F.google_scholar_link,
                            F.specialization,
                            F.research,
                            F.education,
                            F.first_name,
                            F.last_name,
                            F.middle_name,
                            F.suffix
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
                $facultyName = $facultyRow['faculty_name'];
                $rank = $facultyRow['rank'];
                $first_name = $facultyRow['first_name'];
                $middle_name = $facultyRow['middle_name'];
                $last_name = $facultyRow['last_name'];
                $suffix = $facultyRow['suffix'];
                $google = $facultyRow['google_scholar_link'];
                $research = $facultyRow['research'];
                $specialization = $facultyRow['specialization'];
                $education = $facultyRow['education'];
                $photoSrc = ($facultyRow['photo'] == null) ? 'assets/img/660f6e5997de4_def.jpg' : 'forms/' . $facultyRow['photo'];
                $transformedRank = isset($rankMap[$rank]) ? $rankMap[$rank] : $rank;
                $facultyId = 'faculty_' . uniqid();

                echo '
                    <div class="col py-2">
                        <div id="' . $facultyId . '" class="container py-2 bg-white rounded custom-container border" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                            <p id="first_name" style="display: none" class="text-center"><strong>' .  $first_name . '</strong></p>
                            <p id="middle_name" style="display: none" class="text-center"><strong>' .  $middle_name . '</strong></p>
                            <p id="last_name" style="display: none" class="text-center"><strong>' .  $last_name . '</strong></p>
                            <p id="suffix" style="display: none" class="text-center"><strong>' .  $suffix . '</strong></p>
                            <p id="rank" style="display: none" class="text-center"><strong>' .  $rank . '</strong></p>
                            <p id="department" style="display: none" class="text-center"><strong>' .  $departmentName . '</strong></p>
                            <p id="google" style="display: none" class="text-center"><strong>' .  $google . '</strong></p>
                            <p id="specialization" style="display: none" class="text-center"><strong>' .  $specialization . '</strong></p>
                            <p id="research" style="display: none" class="text-center"><strong>' .  $research . '</strong></p>
                            <p id="education" style="display: none" class="text-center"><strong>' .  $education . '</strong></p>
                            <img src="' . $photoSrc . '" class="rounded img-fluid" alt="...">
                            <h6 id="' . $facultyId . '_name" class="text-center mt-2 maroon"><strong>' . $departmentName . '</strong></h6>
                            <div class="container" style="display: flex; justify-content: center;">
                                <div style="width: 30%;">
                                    <hr style="width: 100%; border: 1px solid;">
                                </div>
                            </div>
                            <h6 class="text-center"><strong>' . $last_name . ',' . $first_name . ' ' .$suffix . ' ' . $middle_name . '</strong></h6>
                            <h6 class="text-center"><strong>' . $transformedRank . '</strong></h6>
                            <h6 id="first_name" style="display: none" class="text-center"><strong>' .  $facultyName . '</strong></h6>
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
<!-- Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body"> 
                <p id="facultyDetails"></p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const containers = document.querySelectorAll('.custom-container');
        containers.forEach(container => {
            container.addEventListener('click', function () {
                const education = container.querySelector('#education').innerText; 
                const first_name = capitalizeFirstLetter(container.querySelector('#first_name').innerText); 
                const middle_name = capitalizeFirstLetter(container.querySelector('#middle_name').innerText);
                const last_name = capitalizeFirstLetter(container.querySelector('#last_name').innerText); 
                const suffix = container.querySelector('#suffix').innerText; 
                const research = container.querySelector('#research').innerText; 
                const google = container.querySelector('#google').innerText; 
                const specialization = container.querySelector('#specialization').innerText; 
                const rankAbbreviation = container.querySelector('#rank').innerText.trim();
                const department = container.querySelector('#department').innerText;
                const facultyName = container.querySelector('h6:last-of-type').innerText;
                const facultyPhoto = container.querySelector('img').getAttribute('src');
                const NewSpecializations = formatSpecializations(specialization);
                const rankMap = {
                    "LECT": "Lecturer",
                    "PROF1": "Professor",
                    "PROF2": "Professor",
                    "PROF3": "Professor",
                    "PROF4": "Professor",
                    "PROF5": "Professor",
                    "PROF6": "Professor",
                    "MTEACH2": "Master Teacher",
                    "TEACH1": "Teacher",
                    "TEACH2": "Teacher",
                    "TEACH3": "Teacher",
                    "ASTPRO1": "Assistant Professor",
                    "ASTPRO3": "Assistant Professor",
                    "ASTPRO4": "Assistant Professor",
                    "ASOPRO1": "Associate Professor",
                    "ASOPRO2": "Associate Professor",
                    "ASOPRO3": "Associate Professor",
                    "ASOPRO4": "Associate Professor",
                    "ASOPRO5": "Associate Professor",
                    "INST1": "Instructor",
                    "INST2": "Instructor",
                    "INST3": "Instructor"
                };
                const rankFullName = rankMap[rankAbbreviation] || rankAbbreviation;

                const departmentMap ={
                    // conversion here
                };
                const departmentNewName = departmentMap[department] || department;
                
                const modalFacultyDetails = document.getElementById('facultyDetails');
                modalFacultyDetails.innerHTML = `
                    <div class="position-relative mb-3">
                        <div class="row">
                            <div class="col col-5 col-md-7"></div>
                            <div class="col col-6 col-md-4">
                                <i class="fa fa-user"></i>
                                <a href="#" onclick="location.href='profile.php?name=${facultyName}'">
                                    <span class="profile">View Full Profile</span>
                                </a>
                            </div>
                            <div class="col col-1 col-md-1"><button type="button" class="btn-close position-absolute end-0" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col col-8 col-md-6 custom-column">
                                <div class="container-fluid mb-2">
                                    <img src="${facultyPhoto}" class="modal_photo rounded" alt="...">
                                </div>
                            </div>
                            <div class="col custom-column">
                                <div class="container-custom">
                                    <h3 class="maroontext"><strong>${first_name} ${middle_name} ${last_name} ${suffix}</strong></h3>
                                    <h5  class="mt-0"><span class="modaltext-two">${rankFullName}</span><span class="fw-lighter modaltext-two">, ${departmentNewName}, SGS</span></h5>
                                    <hr>
                                    <h5  class="modaltext mt-0"><strong>Highest Educational Attainment:</strong><span class="modalspan"></span></h5>
                                    <h5  class="modaltext mt-0"><strong>Specializations:</strong><span class="modalspan"> ${NewSpecializations}</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>`;
            });
        });
    });
</script>




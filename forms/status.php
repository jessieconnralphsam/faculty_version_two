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
    F.status,
    F.first_name,
    F.middle_name,
    F.last_name,
    F.suffix
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
        'status' => $row['status'],
        'first_name' => $row['first_name'],
        'middle_name' => $row['middle_name'],
        'last_name' => $row['last_name'],
        'suffix' => $row['suffix']
    );
    $facultyData[] = $faculty;
}
pg_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
    </style>
</head>
<body>
    <button class="btn btn-success mt-2 mb-2">Import</button>
    <table>
        <thead>
            <tr>
                <th>Faculty Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Suffix</th>
                <th>Status</th>
                <th>College</th>
                <th>Department</th>
                <th>Email</th>
                <th>Specialization</th>
                <th>Research</th>
                <th>Google Scholar</th>
                <th>Rank</th>
                <th>Dean</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($facultyData as $faculty): ?>
                <tr>
                    <td><?php echo $faculty['faculty_name']; ?></td>
                    <td><?php echo $faculty['first_name']; ?></td>
                    <td><?php echo $faculty['middle_name']; ?></td>
                    <td><?php echo $faculty['last_name']; ?></td>
                    <td><?php echo $faculty['suffix']; ?></td>
                    <td><?php echo $faculty['status']; ?></td>
                    <td><?php echo $faculty['college_name']; ?></td>
                    <td><?php echo $faculty['department_name']; ?></td>
                    <td><?php echo $faculty['email']; ?></td>
                    <td><?php echo $faculty['specialization']; ?></td>
                    <td><?php echo $faculty['research']; ?></td>
                    <td><?php echo $faculty['google_scholar_link']; ?></td>
                    <td><?php echo $faculty['rank']; ?></td>
                    <td><?php echo $faculty['dean']; ?></td>
                    <td>
                        <button class="btn btn-sm btn-primary mb-2" onclick="openModal(
                            '<?php echo $faculty['faculty_name']; ?>',
                            '<?php echo $faculty['status']; ?>',
                            '<?php echo $faculty['email']; ?>',
                            '<?php echo $faculty['specialization']; ?>',
                            '<?php echo $faculty['research']; ?>',
                            '<?php echo $faculty['google_scholar_link']; ?>',
                            '<?php echo $faculty['first_name']; ?>',
                            '<?php echo $faculty['middle_name']; ?>',
                            '<?php echo $faculty['last_name']; ?>',
                            '<?php echo $faculty['suffix']; ?>')">Edit
                        </button>
                        <button class="btn btn-sm btn-success" onclick="addLoad_Modal()">load</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- edit Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <div>
                <button  style="width:50px; float: right;" class="close btn btn-sm btn-danger" onclick="closeModal()">Close</button>
            </div>
            <div id="nameDisplay"></div>
            <form id="editForm" action="update.php" method="post">
                <input type="hidden" id="facultyName" name="faculty_name">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name:</label>
                    <input type="text" id="firstName" name="first_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="middleName" class="form-label">Middle Name:</label>
                    <input type="text" id="middleName" name="middle_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name:</label>
                    <input type="text" id="lastName" name="last_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="suffix" class="form-label">Suffix:</label>
                    <input type="text" id="suffix" name="suffix" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <input type="text" id="status" name="status" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="specialization" class="form-label">Specialization:</label>
                    <input type="text" id="specialization" name="specialization" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="research" class="form-label">Research:</label>
                    <input type="text" id="research" name="research" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="googleScholar" class="form-label">Google Scholar:</label>
                    <input type="text" id="googleScholar" name="google_scholar_link" class="form-control">
                </div>
                
                <!-- End of new input fields -->
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    <!-- load modal -->
    <div id="loadModal" class="modal">
        <div class="modal-content">
            <div>
                <button  style="width:50px; float: right;" class="close btn btn-sm btn-danger" onclick="closeLoad_Modal()">Close</button>
            </div>
            <h1 class="text-center">Additional Load</h1>
	    <p class="text-center">form for additional load here</p>
            <form id="loadForm" action="#" method="post">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openModal(name, status, email, specialization, research, googleScholar, firstName, middleName, lastName, suffix) {
            document.getElementById('facultyName').value = name;
            document.getElementById('status').value = status;
            document.getElementById('email').value = email;
            document.getElementById('specialization').value =  specialization;
            document.getElementById('research').value = research;
            document.getElementById('googleScholar').value = googleScholar;
            document.getElementById('firstName').value = firstName;
            document.getElementById('middleName').value = middleName;
            document.getElementById('lastName').value = lastName;
            document.getElementById('suffix').value = suffix;
            document.getElementById('nameDisplay').innerHTML = '<p>Name: ' + name + '</p>';
            document.getElementById('editModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }
        function addLoad_Modal(){
            document.getElementById('loadModal').style.display = 'block';
        }
        function closeLoad_Modal(){
            document.getElementById('loadModal').style.display = 'none';
        }
    </script>
</body>
</html>





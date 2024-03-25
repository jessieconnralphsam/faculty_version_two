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
    <table>
        <thead>
            <tr>
                <th>Faculty Name</th>
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
                    <td><?php echo $faculty['status']; ?></td>
                    <td><?php echo $faculty['college_name']; ?></td>
                    <td><?php echo $faculty['department_name']; ?></td>
                    <td><?php echo $faculty['email']; ?></td>
                    <td><?php echo $faculty['specialization']; ?></td>
                    <td><?php echo $faculty['research']; ?></td>
                    <td><?php echo $faculty['google_scholar_link']; ?></td>
                    <td><?php echo $faculty['rank']; ?></td>
                    <td><?php echo $faculty['dean']; ?></td>
                    <td><button onclick="openModal('<?php echo $faculty['faculty_name']; ?>', '<?php echo $faculty['status']; ?>', '<?php echo $faculty['email']; ?>')">Edit</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span onclick="closeModal()" style="float:right;cursor:pointer;">&times;</span>
            <h2>Edit Faculty</h2>
            <form id="editForm" action="update.php" method="post">
                <input type="hidden" id="facultyName" name="faculty_name">
                Status: <input type="text" id="status" name="status"><br><br>
                Email: <input type="email" id="email" name="email"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script>
        function openModal(name, status, email) {
            document.getElementById('facultyName').value = name;
            document.getElementById('status').value = status;
            document.getElementById('email').value = email;
            document.getElementById('editModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }
    </script>
</body>
</html>



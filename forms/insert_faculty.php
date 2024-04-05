<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $dbname = "faculty";
    $user = "postgres";
    $password = "postgres";

    $dsn = "pgsql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $uploadDirectory = 'assets/img/';

        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }
        $filename = uniqid() . '_' . basename($_FILES['photo']['name']);

        $targetPath = $uploadDirectory . $filename;
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
            $stmt = $pdo->prepare("INSERT INTO Faculty (name, collegeID, dean, departmentID, status, rank, email, google_scholar_link, specialization, research, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $_POST['name']);
            $stmt->bindParam(2, $_POST['collegeID']);
            $stmt->bindParam(3, $_POST['dean']);
            $stmt->bindParam(4, $_POST['departmentID']);
            $stmt->bindParam(5, $_POST['status']);
            $stmt->bindParam(6, $_POST['rank']);
            $stmt->bindParam(7, $_POST['email']);
            $stmt->bindParam(8, $_POST['google_scholar_link']);
            $stmt->bindParam(9, $_POST['specialization']);
            $stmt->bindParam(10, $_POST['research']);
            $stmt->bindParam(11, $targetPath); 
            $stmt->execute();


            $facultyID = $pdo->lastInsertId();

            $stmt2 = $pdo->prepare("INSERT INTO Additional_load (facultyID, title, kind, equivalent_load, duration_from, duration_to) VALUES (?, ?, ?, ?, ?, ?)");

            $stmt2->bindParam(1, $facultyID);
            $stmt2->bindParam(2, $_POST['title']);
            $stmt2->bindParam(3, $_POST['kind']);
            $stmt2->bindParam(4, $_POST['equivalent_load']);
            $stmt2->bindParam(5, $_POST['duration_from']);
            $stmt2->bindParam(6, $_POST['duration_to']);

            $stmt2->execute();


            $pdo = null;

            header("Location: insert.php?success=1");
            exit();
        } else {

            echo "Error while uploading the photo.";
        }
    } else {
        echo "Error uploading file.";
    }
} else {
    header("Location: insert.php");
    exit();
}
?>

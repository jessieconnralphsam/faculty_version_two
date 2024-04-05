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

        $maxWidth = 800;
        $maxHeight = 600;

        $image = imagecreatefromstring(file_get_contents($_FILES['photo']['tmp_name']));

        $originalWidth = imagesx($image);
        $originalHeight = imagesy($image);

        $aspectRatio = $originalWidth / $originalHeight;

        if ($originalWidth > $maxWidth || $originalHeight > $maxHeight) {
            if ($maxWidth / $maxHeight > $aspectRatio) {
                $maxWidth = $maxHeight * $aspectRatio;
            } else {
                $maxHeight = $maxWidth / $aspectRatio;
            }
        }

        $newImage = imagecreatetruecolor($maxWidth, $maxHeight);
        imagecopyresampled($newImage, $image, 0, 0, 0, 0, $maxWidth, $maxHeight, $originalWidth, $originalHeight);

        $filename = uniqid() . '_' . basename($_FILES['photo']['name']);
        $targetPath = $uploadDirectory . $filename;
        imagejpeg($newImage, $targetPath, 50); 

        imagedestroy($image);
        imagedestroy($newImage);

        $stmt = $pdo->prepare("UPDATE Faculty SET photo = ? WHERE name = ?");
        $stmt->bindParam(1, $targetPath);
        $stmt->bindParam(2, $_POST['name']);
        $stmt->execute();

        echo "Photo for faculty member '" . $_POST['name'] . "' has been updated successfully.";
    } else {
        echo "Error uploading file.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Faculty Photo</title>
</head>
<body>

<h2>Update Faculty Photo</h2>

<form action="update_photo.php" method="post" enctype="multipart/form-data">
    Faculty Name:<br>
    <input type="text" name="name" required><br><br>
    Select New Photo (JPG only):<br>
    <input type="file" name="photo" accept="image/jpeg" required><br><br>
    <input type="submit" value="Update Photo">
</form>

</body>
</html>

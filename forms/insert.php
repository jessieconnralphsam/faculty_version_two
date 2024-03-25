<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Faculty Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Insert Faculty Information</h1>
        <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo '<div class="alert alert-success" role="alert">Insert successful!</div>';
        }
        ?>
        <form id="facultyForm" action="insert_faculty.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="collegeID">College:</label>
                    <select class="form-control" id="collegeID" name="collegeID" required>
                        <option value="1">College of Engineering</option>
                        <option value="2">College of Agriculture</option>
                        <option value="3">College of Social Sciences and Humanities</option>
                        <option value="4">College of Medicine</option>
                        <option value="5">College of Business Administration and Accountacy</option>
                        <option value="6">College of Fisheries</option>
                        <option value="7">College of Natural Science and Mathematics</option>
                        <option value="8">School of Graduate Studies</option>
                        <option value="9">College of Education</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="departmentID">Department:</label>
                    <select class="form-control" id="departmentID" name="departmentID" required>
                        <option value="1">sample 1</option>
                        <option value="2">sample 2</option>
                    </select>
                </div>
            </div> -->

            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="On Leave">On Leave</option>
                        <option value="Retired">Retired</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="rank">Rank:</label>
                    <select class="form-control" id="rank" name="rank" required>
                        <option value="Associate Professor 1">Associate Professor 1</option>
                        <option value="Associate Professor 2">Associate Professor 2</option>
                        <option value="Associate Professor 3">Associate Professor 3</option>
                        <option value="Associate Professor 4">Associate Professor 4</option>
                        <option value="Associate Professor 5">Associate Professor 5</option>
                        <option value="Assistant Professor 1">Assistant Professor 1</option>
                        <option value="Assistant Professor 2">Assistant Professor 2</option>
                        <option value="Assistant Professor 3">Assistant Professor 3</option>
                        <option value="Assistant Professor 4">Assistant Professor 4</option>
                        <option value="Assistant Professor 5">Assistant Professor 5</option>
                        <option value="Instructor 1">Instructor 1</option>
                        <option value="Instructor 2">Instructor 2</option>
                        <option value="Instructor 3">Instructor 3</option>
                        <option value="Instructor 4">Instructor 4</option>
                        <option value="Instructor 5">Instructor 5</option>
                        <option value="Professor 1">Professor 1</option>
                        <option value="Professor 2">Professor 2</option>
                        <option value="Professor 3">Professor 3</option>
                        <option value="Professor 4">Professor 4</option>
                        <option value="Professor 5">Professor 5</option>
                        <option value="Professor 6">Professor 6</option>
                    </select>
                </div>
            </div> -->

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- <div class="form-group">
                <label for="google_scholar_link">Google Scholar Link:</label>
                <input type="url" class="form-control" id="google_scholar_link" name="google_scholar_link">
            </div>

            <div class="form-group">
                <label for="specialization">Specialization:</label>
                <input type="text" class="form-control" id="specialization" name="specialization">
            </div>

            <div class="form-group">
                <label for="research">Research:</label>
                <input type="text" class="form-control" id="research" name="research">
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>

            <div class="form-group">
                <label>Dean:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dean" id="dean_yes" value="1">
                    <label class="form-check-label" for="dean_yes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dean" id="dean_no" value="0" checked>
                    <label class="form-check-label" for="dean_no">No</label>
                </div>
            </div>

            <h2>Additional Load</h2>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="kind">Kind:</label>
                <input type="text" class="form-control" id="kind" name="kind" required>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="equivalent_load">Equivalent Load:</label>
                    <input type="number" class="form-control" id="equivalent_load" name="equivalent_load" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="duration_from">Duration From:</label>
                    <input type="datetime-local" class="form-control" id="duration_from" name="duration_from" required>
                </div>
            </div>

            <div class="form-group">
                <label for="duration_to">Duration To:</label>
                <input type="datetime-local" class="form-control" id="duration_to" name="duration_to" required>
            </div> -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

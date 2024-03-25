<!-- ====== SSH Page ======= -->
<!DOCTYPE html>
<html lang="en">
<?php include('includes/data_con.php');?>
<?php include('includes/header.php'); ?>
<body>
  <?php include('includes/topbar.php'); ?>
  <?php include('includes/head.php'); ?>
  <!-- Start intro -->
  <div class="container mt-5 about-us-container">
    <p class="breadcrumb-text">
        <a class="breadcrumb-home bc-item" href="#">Home</a>
        <span class="breadcrumb-home bc-item"> > </span>
        <a class="breadcrumb-academics bc-item" href="#">Academics</a>
        <span class="breadcrumb-home bc-item"> > </span>
        <a class="breadcrumb-home bc-item" onclick="redirectToFacultyDirectory()">Faculty Directory</a>
        <span class="breadcrumb-home bc-item"> > </span>
        <a class="breadcrumb-faculty bc-item"><strong>College of Social Sciences and Humanities</strong></a>
    </p>
  </div>
  <!-- end intro -->
  <?php include('content/ssh-content.php')?>
  <div style="margin-bottom: 2rem;"></div>
  <!-- start loader -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- end loader -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/data_fetching.js"></script>
  <script>
    var profRanks = <?php echo json_encode($profRanks); ?>;
    var astproRanks = <?php echo json_encode($astproRanks); ?>;
    var asoproRanks = <?php echo json_encode($asoproRanks); ?>;
    var instRanks = <?php echo json_encode($instRanks); ?>;
    var permanentCount = <?php echo json_encode($permanentCount); ?>;
    var casualCount = <?php echo json_encode($casualCount); ?>;
    var lecturerCount = <?php echo json_encode($lecturerCount); ?>; 
  </script>
  <script src="assets/js/chart.js"></script>
</body>
</html>

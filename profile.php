<?php include('connection/db_connection.php'); ?>
<?php include('includes/faculty_data.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body style="background-color:#F5F7FA;">
  <?php include('includes/topbar.php'); ?>
  <div class="f-container mb-4"></div>
  <div class="bg-f-container">
    <div class="container down-container">
      <h3 class="color-white">Faculty Directory</h3>
      <div class="container container-line mt-3 mb-3"></div>
      <p class="color-white">Search our faculty members through an online directory.</p>
    </div>
  </div>
  <div class="container">
      <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search name" aria-label="Recipient's username" aria-describedby="search-button" id="search-input">
                        <button class="btn maroon-button" type="button" id="search-button"><i class="fa fa-search color-white"></i></button>
                    </div>
                </div>
                <div class="col-md-5">
                </div>
            </div>
      </div>
      <?php include('data/profile_data.php'); ?>
  </div>
  <div style="margin-bottom: 2rem;"></div>
  <?php include('includes/footer.php'); ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center mb-5"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/page.js"></script>
</body>
</html>
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
      <?php include('includes/search.php'); ?>
      <div class="container  py-2 px-2">
        <div class="container rounded bg-white">
            <div class="px-3 py-3 bg-white">
              <strong>All Colleges / <span class="maroon">College of Natural Sciences and Mathematics (CNSM)</span></strong>
            </div>
            <div class="px-3 py-3">
              <strong>All Colleges (10)</strong>
              <div class="py-4">
                <div class="row">
                      <div class="col py-2">
                          <div class="container py-2 bg-white rounded custom-container border">
                            <img src="forms/assets/img/65dbea9321a51_DELA CRUZ, MARISSA G _MG_9407.jpg" class="rounded img-fluid" alt="...">
                            <h6 class="text-center mt-2 maroon"><strong>College of Business Administration and Accountancy</strong></h6>
                            <div class="container" style="display: flex; justify-content: center;">
                                <div style="width: 30%;">
                                    <hr style="width: 100%; border: 1px solid;">
                                </div>
                            </div>
                            <h6 class="text-center"><strong>Marissa G. Dela Cruz</strong></h6>
                            <h6 class="text-center">Dean of CBA&A</h6>
                          </div>
                      </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>
  <div style="margin-bottom: 2rem;"></div>
  <?php include('includes/footer.php'); ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center mb-5"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chart.js"></script>
</body>
</html>
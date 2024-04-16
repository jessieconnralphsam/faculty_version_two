<?php include('connection/db_connection.php'); ?>
<?php include('data/dean_count.php'); ?>
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
      <?php include('includes/chart.php'); ?>
      <div class="container  py-2 px-2">
        <div class="container rounded bg-white">
            <div class="px-3 py-3">
              <div id="data-row">
                <strong id="colleges-text">All Colleges (<?php echo $num_rows; ?>)</strong>
                <div class="py-4">
                  <div class="row">
                      <?php include('data/index_data.php'); ?>
                  </div>
                </div>
              </div>
              <div>
              </div>
                <div class="row" id="result-row" style="display:none">
                  <?php include('includes/search-result.php'); ?>
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
  <script src="assets/js/page.js"></script>
</body>
</html>

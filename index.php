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
                    <input type="text" class="form-control" placeholder="Search name" aria-label="Recipient's username" aria-describedby="">
                    <button class="btn maroon-button" type="button" id=""><i class="fa fa-search color-white"></i></button>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col text-center">
                        <div class="row mt-2">
                            <div class="col">
                                <strong>Show Status</strong>
                            </div>
                            <div class="col-2">
                                <input class="form-check-input" type="checkbox" value="" aria-label="">
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="row mt-2">
                            <div class="col">
                                <strong>Show Rank</strong>
                            </div>
                            <div class="col col-2">
                                <input class="form-check-input" type="checkbox" value="" aria-label="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- <div class="container mt-3">
        <div class="row row-cols-auto">
          <div class="col px-2 py-2">
            <div  class="container bg-white rounded">
              <div class="container">
                <div class="row">
                  <div class="col col-md-10">
                    <div>
                      <strong>CNSM Faculty Rank</strong>
                    </div>
                  </div>
                  <div class="col col-md-2">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col px-2 py-2">
            <div  class="container bg-white rounded">
              <div class="container">
                <div class="row">
                  <div class="col col-md-10">
                    <div>
                      <strong>CNSM Faculty Rank</strong>
                    </div>
                  </div>
                  <div class="col col-md-2">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="container  py-2 px-2">
        <div class="container rounded bg-white">
            <!-- <div class="px-3 py-3 bg-white">
              <strong>All Colleges / <span class="maroon">College of Natural Sciences and Mathematics (CNSM)</span></strong>
            </div> -->
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
  <footer>
      <div class="footer-bg">
        <div class="footer-container">
          <div class="container-foot d-flex justify-content-center">
            <p class="color-white text-center mt-3">Copyright © 2024. All Rights Reserved.</p>
          </div>
        </div>
      </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center mb-5"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chart.js"></script>
</body>
</html>

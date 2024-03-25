<!-- ======= Form Page ======= -->
<!DOCTYPE html>
<html lang="en">
<?php include('includes/data_con.php');?>
<?php include('includes/header.php'); ?>
<body>
  <!-- ======= Top Nav ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class=""></i> 
      </div>
      <div class="d-flex align-items-auto login-cursor">
        <a href="#"><i class="fa fa-user"></i>Email@msugensan.edu.ph</a>
      </div>
    </div>
  </div>
  <!-- End Top Nav -->
  <?php include('includes/head.php');?>
  <div style="margin-top: 10rem;"></div>
  <div class="container mt5">
    <div class="row">
      <div class="col col-md-4 mb-3">
          <div class="row">
            <div class="col">
              <div class="col col-md-12">
                <div class="faculty-container bg-white rounded-3 shadow-md px-3 py-3 col h-lg-100">
                    <div class="row">
                      <div class="col col-md-12">
                        <div class="row">
                          <div class="col">
                            <h6>Edit Profile</h6>
                          </div>
                          <div class="col-2 col-md-3">
                            <div class="container">
                                <img class="formEdit" src="assets/img/edit.png" alt="edit" width="25" height="25"  data-bs-target="#editProfileToggle" data-bs-toggle="modal">
                                <div class="modal fade" id="editProfileToggle" aria-hidden="true" aria-labelledby="editProfileToggleLabel" tabindex="-1">
                                  <div class="modal-dialog modal-md modal-dialog-centered">
                                    <div class="modal-content">
                                      <?php include('content/faculty_profile_content.php')?>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal fade" id="fresearchModalToggle2" aria-hidden="true" aria-labelledby="fresearchModalToggleLabel2" tabindex="-1">
                                  <div class="modal-dialog modal-md modal-dialog-centered">
                                    <div class="modal-content">
                                      <?php include('faculty_content/faculty_hidden_content.php')?>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="col col-md-11 mx-3 form-container form-container-image ">
                            <img class="formImage img-fluid" src="assets/img/sample_pic.jpg" alt="Faculty Image">
                      </div>
                      <div class="col col-md-12">
                          <h6 class="text-center text-maroon mb-1">Lorem, ipsum dolor.</h6>
                      </div>
                      <div class="col-12 col-md-12">
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col">
                                <i class="fa-solid fa-envelope"></i>
                                <small>Lorem, ipsum.@msugensan.edu.ph</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col mt-2">
                                <i class="fa-solid fa-building"></i>
                                <small>Lorem ipsum dolor sit amet.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col mt-2">
                                <i class="fa-solid fa-building-columns"></i>
                                <small>Lorem, ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col mt-1">
                                <small><strong>Status: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col">
                                <small><strong>Rank: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col">
                                <small><strong>Google Scholar Link: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col">
                                <small><strong>Specialization: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1 col-md-1">
                              </div>
                              <div class="col">
                                <small><strong>Research Interest: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                      </div>
                    </div>
                </div> 
              </div>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="row">
          <div class="col col-md-12 mb-2">
            <div class="col col-md-12">
              <div class="faculty-container-research bg-white rounded-3 shadow-md px-3 mb-0 col h-lg-100">
                <div class="row">
                  <div class="col-10">
                    <div class="container">
                      <h5 class="research-text mb-3 mt-4">Research</h5>
                    </div>
                  </div>
                  <div class="col-4 col-md-2">
                      <div class="row">
                        <div class="col-2 col-md-4">
                        <div class="container mt-3">
                          <img class="formEdit" src="assets/img/add.png" alt="add" width="25" height="25" data-bs-target="#researchToggle" data-bs-toggle="modal">
                          <div class="modal fade" id="researchToggle" aria-hidden="true" aria-labelledby="researchToggleLabel" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="researchToggleLabel">Research Modal</h1>
                                      </div>
                                      <div class="modal-body">
                                        Lorem ipsum dolor sit amet.
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                      </div>
                                </div>
                              </div>
                          </div>
                        </div>
                        </div>
                        <div class="col-2 col-md-1">
                          <div class="container container-add mt-3 toggle-container" onclick="research_toggleContent()">
                              <img class="formEdit toggle-icon" src="assets/img/down.png" alt="down" width="20" height="15">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- faculty_research_content -->
                <div class="faculty-content-research">
                  <?php include('faculty_content/faculty_content_research.php')?>
                </div>
              </div>
            </div> 
          </div>
          <div class="col col-md-12 mb-2">
            <div class="col col-md-12">
              <div class="faculty-container bg-white rounded-3 shadow-md px-3 mb-0 col h-lg-100">
                <div class="row">
                  <div class="col">
                    <div class="container">
                      <h5 class="research-text mb-3 mt-4">Extension</h5>
                    </div>
                  </div>
                  <div class="col col-md-2">
                      <div class="row">
                        <div class="col col-md-4">
                          <div class="container mt-3">
                            <img class="formEdit" src="assets/img/add.png" alt="add" width="25" height="25" data-bs-target="#extensionToggle" data-bs-toggle="modal">
                            <div class="modal fade" id="extensionToggle" aria-hidden="true" aria-labelledby="extensionToggleLabel" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="extensionToggleLabel">Extension Modal</h1>
                                      </div>
                                      <div class="modal-body">
                                        Lorem ipsum dolor sit amet.
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col col-md-1">
                          <div class="container mt-3 toggle-container" onclick="extension_toggleContent()">
                            <img class="formEdit toggle-icon-extension" src="assets/img/arrow-up.png" alt="down" width="20" height="15">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- faculty_extension_content -->
                <div class="faculty-content-extension">
                  <?php include('faculty_content/faculty_content_extension.php')?>
                </div>
              </div>
            </div> 
          </div>
          <div class="col col-md-12">
            <div class="col col-md-12">
              <div class="faculty-container bg-white rounded-3 shadow-md px-3 mb-0 col h-lg-100">
                <div class="row">
                  <div class="col">
                    <div class="container">
                      <h5 class="research-text mb-3 mt-4">Designation</h5>
                    </div>
                  </div>
                  <div class="col col-md-2">
                      <div class="row">
                        <div class="col col-md-4">
                          <div class="container mt-3">
                            <img class="formEdit" src="assets/img/add.png" alt="add" width="25" height="25" data-bs-target="#designationToggle" data-bs-toggle="modal">
                            <div class="modal fade" id="designationToggle" aria-hidden="true" aria-labelledby="designationToggleLabel" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="designationToggleLabel">Extension Modal</h1>
                                      </div>
                                      <div class="modal-body">
                                        Lorem ipsum dolor sit amet.
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col col-md-1">
                          <div class="container mt-3 toggle-container" onclick="designation_toggleContent()">
                            <img class="formEdit toggle-icon-designation" src="assets/img/arrow-up.png" alt="down" width="20" height="15">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- faculty_extension_content -->
                <div class="faculty-content-designation">
                  <?php include('faculty_content/faculty_content_designation.php')?>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div> 
    </div>
  </div>
  <div style="margin-bottom: 2rem;"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chart.js"></script>
  <script src="assets/js/faculty.js"></script>
</body>
</html>
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
                          <div class="col col-md-3">
                            <div class="container">
                                <img class="formEdit" src="assets/img/edit.png" alt="edit" width="25" height="25">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="col col-md-11 mx-3 form-container">
                            <img class="formImage img-fluid" src="assets/img/sample_pic.jpg" alt="Faculty Image">
                      </div>
                      <div class="col col-md-12">
                          <h6 class="text-center text-maroon mb-1">Lorem, ipsum dolor.</h6>
                      </div>
                      <div class="col col-md-12">
                            <div class="row">
                              <div class="col col-md-1">
                              </div>
                              <div class="col">
                                <i class="fa-solid fa-envelope"></i>
                                <small>Lorem, ipsum.@msugensan.edu.ph</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-md-1">
                              </div>
                              <div class="col mt-2">
                                <i class="fa-solid fa-building"></i>
                                <small>Lorem ipsum dolor sit amet.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-md-1">
                              </div>
                              <div class="col mt-2">
                                <i class="fa-solid fa-building-columns"></i>
                                <small>Lorem, ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-md-1">
                              </div>
                              <div class="col mt-1">
                                <small><strong>Status: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-md-1">
                              </div>
                              <div class="col">
                                <small><strong>Rank: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-md-1">
                              </div>
                              <div class="col">
                                <small><strong>Google Scholar Link: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-md-1">
                              </div>
                              <div class="col">
                                <small><strong>Specialization: </strong></small>
                                <small>Lorem ipsum dolor.</small>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-md-1">
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
              <div class="faculty-container bg-white rounded-3 shadow-md px-3 mb-0 col h-lg-100">
                <div class="row">
                  <div class="col">
                    <div class="container">
                      <h5 class="research-text mb-3 mt-4">Research</h5>
                    </div>
                  </div>
                  <div class="col col-md-2">
                      <div class="row">
                        <div class="col col-md-4">
                          <div class="container mt-3">
                            <img class="formEdit" src="assets/img/add.png" alt="add" width="25" height="25">
                          </div>
                        </div>
                        <div class="col col-md-1">
                          <div class="container mt-3 toggle-container" onclick="research_toggleContent()">
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
                            <img class="formEdit" src="assets/img/add.png" alt="add" width="25" height="25">
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
                            <img class="formEdit" src="assets/img/add.png" alt="add" width="25" height="25">
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
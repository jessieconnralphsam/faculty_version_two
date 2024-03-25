<div class="container parent-con">
      <div class="container rounded-top-4 main-con">
          <div class="row">
            <div class="col rounded-end-5 rounded-top-4 col-md-6 custom-background">
                    <div class="col d-flex justify-content-center align-items-center mb-2 mt-3">
                        <div class="row">
                          <div class="col col-md-3">
                            <div class="circle text-center mb-2">
                                <small class="mt-4 text-center text-mar">1</small>
                            </div>
                          </div>
                          <di class="col col-md-8">
                            <h5 class="white-text">Faculty Profile</h5>
                          </di>
                        </div>
                    </div>
            </div>
            <div class="col col-md-6 ">
                    <div class="col d-flex justify-content-center align-items-center mb-2 mt-3">
                        <div class="col d-flex justify-content-center align-items-center">
                          <div class="row">
                            <div class="col col-md-2">
                              <div class="circle text-center mb-2">
                                  <small class="mt-4 text-center black-text">2</small>
                              </div>
                            </div>
                            <di class="col col-md-10">
                              <h5 class="black-text">Research Information</h5>
                            </di>
                          </div>
                        </div>
                    </div>
            </div>
          </div>
      </div>
      <div class="container sub-con">
          <br>
          <h3 class="text-center faculty-text mb-1">Faculty Profile</h3>
          <p class="text-center text-gray mb-0">Please input your faculty information for the faculty directory.</p>
          <br>
          <div class="container sub-con">
                <div class="row">
                  <div class="col col-md-6">
                      <h5 class="input-text">Full Name</h5>
                      <input type="text" id="input" placeholder="Full Name">
                  </div>
                  <div class="col col-md-6">
                      <h5 class="input-text">Email</h5>
                      <input type="text" id="input" placeholder="Institutional Email">
                  </div>
                </div>
                <div style="margin-bottom: 1rem;"></div>
                <div class="row">
                  <div class="col col-md-6">
                      <h5 class="input-text">College</h5>
                      <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Select Your College
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                        </ul>
                      </div>
                  </div>
                  <div class="col col-md-6">
                      <h5 class="input-text">Department</h5>
                      <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Select Your Department
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><button class="dropdown-item" type="button">Department of Agronomy</button></li>
                          <li><button class="dropdown-item" type="button">Department of Math</button></li>
                          <li><button class="dropdown-item" type="button">Department of Science</button></li>
                        </ul>
                      </div>
                  </div>
                </div>
                <div style="margin-bottom: 1rem;"></div>
                <div class="row">
                  <div class="col col-md-6">
                      <h5 class="input-text">Status</h5>
                      <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Select Your Status
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                        </ul>
                      </div>
                  </div>
                  <div class="col col-md-6">
                      <h5 class="input-text">Rank</h5>
                      <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Select Your Rank
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                          <li><button class="dropdown-item" type="button">Sample</button></li>
                        </ul>
                      </div>
                  </div>
                </div>
                <div style="margin-bottom: 1rem;"></div>
                <div class="row">
                  <div class="col col-md-6">
                      <h5 class="input-text">Upload Image</h5>
                      <div class="container border upload mx-1 border" id="uploadContainer">
                          <div class="row">
                              <div class="col col-md-2 mt-3">
                                  <div class="shadow-folder">
                                      <i class="far fa-folder fa-md folder"></i>
                                  </div>
                              </div>
                              <div class="col col-md-10 mt-4">
                                  <small id="fileUploadMessage" class="mt-4 input-text-upload">Upload your file here</small>
                              </div>
                          </div>
                      </div>
                      <input type="file" id="fileInput" accept="image/*" style="display: none;">
                  </div>
                  <div class="col">
                      <h5 class="input-text">Dean</h5>
                      <div class="row">
                        <div class="col col-md-3">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="yes" value="option1">
                            <label class="form-check-label" for="yes">
                              Yes
                            </label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="no" value="option1">
                              <label class="form-check-label" for="no">
                                No
                              </label>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>          
          </div>
          <div style="margin-bottom: 2rem;"></div>
          <div class="row mt-2">
            <div class="col"></div>
            <div class="col col-md-3 mx-0">
              <div class="container-sm rounded-5 cancel-background">
                <h5 class="text-center" data-bs-dismiss="modal" aria-label="Close">Cancel</h5>
              </div>
            </div>
            <div class="col col-md-3 mb-2 mx-3">
              <div class="container-sm rounded-5 next-background">
                <h5 class="text-center text-white" data-bs-target="#fresearchModalToggle2" data-bs-toggle="modal">Next</h5>
              </div>
            </div>
          </div>
      </div>
  </div>
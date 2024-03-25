<!-- ======= Natural Sciences & Math Page Content ======= -->
<div class="container mt-5">
    <div class="row">
      <!-- faculty -->
      <div class="col">
        <!-- title -->
        <h5><strong>List of Faculty S.Y. 2024-2025</strong></h5>
        <!-- faculty container -->
        <div class="faculty-container bg-light rounded-3 shadow-lg px-3 py-3 col h-lg-100">
          <div class="col-md-12 mb-3">
            <div class="input-group justify-content-end">
              <div class="col">
                <div class="col-12">
                  <div class="input-group-append">
                    <span class="input-group-text bg-transparent" id="search-icon">
                    <input type="text" class="custom-search border-0 bg-transparent border" 
                    placeholder="Search Name, College, Department, Rank, Specialization, etc." 
                    aria-label="Search" aria-describedby="search-icon" id="searchInput">

                      <div class="col">
                        <i class="bi bi-search col-1" 
                        style="color: #718EBF;"></i>
                      </div>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>        
          <div class="row h-100" id="facultyList">
          </div>
          <div class="row h-100" id="facultyList">
          </div>
          <div class="row h-100" id="facultyList">
          </div>
          <div class="row h-100" id="facultyList">
          </div>
      </div>
    </div>
    <!-- end faculty container -->
    <!-- status container -->
    <div class="col-md-4">
      <div class="row">
          <h5><strong>Status</strong></h5>
          <div class="bg-light rounded-3 shadow-sm px-3 py-3 col h-lg-100">
              <div id="status_chart">
              </div>
              <div class="center-container">
                  <small><strong>Total Number of Faculty: </strong><span class="text-maroon"><strong><?php echo $totalFacultyCount;?></strong></span></small>
              </div>
          </div>
      </div>
      <!-- end status container -->
      <div style="margin-bottom: 1rem;"></div>
      <!-- rank container -->
      <div class="row"> 
          <h5><strong>Rank</strong></h5>
          <div class="bg-light rounded-3 shadow-sm px-3 py-3 col">
              <div id="chart"></div>
          </div>
      </div>
      <!-- end rank container -->
    </div>
  </div>
<!-- This script retrieves faculty data from PHP and dynamically generates HTML content based on user input -->
<script>
  var facultyData = <?php echo json_encode($facultyData); ?>;
  var facultyListContainer = document.getElementById('facultyList');
  var searchInput = document.getElementById('searchInput');
  // Function that display hidden content when a faculty container is clicked
  function showHiddenContainer(facultyName, collegeName, departmentName, email, specialization, research, googleScholarLink, facultyPhoto) {
    var hiddenContent = `
    <div class="hidden-content mt-5">
      <div class="hidden-content-box">
        <button class="close-btn btn btn-outline-none text-right" onclick="hideContainer(this.parentNode)">X</button>
        <div class="row">
          <div class="col-md-4">
            <div class="image-container">
              <img class="img-fluid hiddenImage" src="${facultyPhoto}" alt="College of Agriculture Image">
            </div>
          </div>
          <div class="col">
            <div class="col-md-12">
              <p class="text-maroon roboto-paragraph con-center"><strong>${facultyName}</strong></p>
              <hr>
              <p class="roboto-paragraph"><strong>College</strong> <br>${collegeName}</p>
              <p class="roboto-paragraph"><strong>Department</strong> <br>${departmentName}</p>
              <p class="roboto-paragraph"><strong>Email</strong> <br>${email}</p>
              <p class="roboto-paragraph"><strong>Specialization</strong> <br>${specialization}</p>
              <p class="roboto-paragraph"><strong>Research Interest</strong> <br>${research}</p>
              <p class="roboto-paragraph"><strong>Google Scholar Link</strong> <br><a href="${googleScholarLink}">${googleScholarLink}</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>`;
    document.body.insertAdjacentHTML('beforeend', hiddenContent);
  }

  // Function that hide the container of hidden content
  function hideContainer(element) {
    var container = element.closest('.hidden-content');
    if (container) {
        container.style.display = 'none';
    }
  }
  // Function that filter faculty list based on search input
  function filterFaculty() {
    var searchQuery = searchInput.value.toLowerCase();
    facultyListContainer.innerHTML = '';

    var resultsFound = false; 

    facultyData.forEach(function(faculty) {
      var facultyName = faculty.faculty_name.toLowerCase();
      var collegeName = faculty.college_name.toLowerCase();
      var departmentName = faculty.department_name.toLowerCase();
      var deanText =
        (faculty.college_name === 'College of Agriculture') ? 'Dean of COA' :
        (faculty.college_name === 'College of Engineering') ? 'Dean of COE' :
        (faculty.college_name === 'Not Match') ? 'No Match' : '';
      var deanTextLower = deanText.toLowerCase();
      var facultyInfo = facultyName + departmentName;
      var facultyPhotoSrc = faculty.photo ? `forms/${faculty.photo}` : 'assets/img/no-prof.webp';
      if (facultyInfo.includes(searchQuery) && faculty.college_name === 'College of Natural Science and Mathematics') {
        resultsFound = true; 
        var facultyHtml = `
          <div class="col-12 col-md-4">
            <div class="container-content bg-light shadow-sm rounded-3" onclick="showHiddenContainer('${faculty.faculty_name}', '${faculty.college_name}', '${faculty.department_name}' , '${faculty.email}', '${faculty.specialization}', '${faculty.research}', '${faculty.google_scholar_link}', '${facultyPhotoSrc}')">
              <div class="text-center">
                <img class="collegeImage" src="${facultyPhotoSrc}" alt="faculty image">
                <h6>${faculty.college_name}</h6>
                <p class="text-maroon"><strong>${faculty.faculty_name}</strong></p>
                <p class="small">${faculty.department_name}</p>
              </div>
            </div>
          </div>
        `;
        facultyListContainer.innerHTML += facultyHtml;
      }
    });
    if (!resultsFound) {
      var facultyHtml = `
      <div class="col-12 text-center">
        <h3>Not Found <i class="bi bi-exclamation-triangle-fill text-warning"></i></h3>
      </div>
      `;
      facultyListContainer.innerHTML += facultyHtml;
    }
  }
  // Add event listener for input event on search input
  searchInput.addEventListener('input', filterFaculty);
  // Initially populate faculty list
  filterFaculty();
</script>


<!-- ======= Main Content ======= -->
<div class="container">
    <div class="row">
      <!-- faculty -->
      <div class="col">
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
    <!-- <div class="col-md-4">
      <div class="row mx-0">
          <div class="bg-light rounded-3 shadow-sm px-3 py-3 col h-lg-100">
              <div id="status_chart">
              </div>
              <div class="center-container">
                  <small><strong>Total Number of Faculty: </strong><span class="text-maroon"><strong><?php echo $totalFacultyCount;?></strong></span></small>
              </div>
          </div>
      </div>
      <div style="margin-bottom: 1rem;"></div>
      <div class="row mx-0"> 
          <h5><strong>Rank</strong></h5>
          <div class="bg-light rounded-3 shadow-sm px-3 py-3 col">
              <div id="chart"></div>
          </div>
      </div>
    </div> -->
</div>
<script>
  var facultyData = <?php echo json_encode($facultyData); ?>;
  //debugging
  // alert(JSON.stringify(facultyData));
  var facultyListContainer = document.getElementById('facultyList');
  var searchInput = document.getElementById('searchInput');

  // Function to filter container based on search input
  function filterFaculty() {
    var searchQuery = searchInput.value.toLowerCase();
    facultyListContainer.innerHTML = ''; 

    var resultsFound = false;

    facultyData.forEach(function(faculty) {
      var facultyName = faculty.faculty_name.toLowerCase();
      var collegeName = faculty.college_name.toLowerCase();
      var Dean = faculty.dean; 
      // Determine dean text based on college name
      var deanText =
        (faculty.college_name === 'College of Agriculture') ? 'Dean of COA' :
        (faculty.college_name === 'College of Engineering') ? 'Dean of COE' :
        (faculty.college_name === 'College of Social Sciences and Humanities') ? 'Dean of CSSH' :
        (faculty.college_name === 'College of Medicine') ? 'Dean of COM' :
        (faculty.college_name === 'College of Business Administration and Accountacy') ? 'Dean of BA&A' :
        (faculty.college_name === 'College of Fisheries') ? 'Dean of COF' :
        (faculty.college_name === 'College of Natural Science and Mathematics') ? 'Dean of CNSM' :
        (faculty.college_name === 'School of Graduate Studies') ? 'Dean of SGS' :
        (faculty.college_name === 'College of Education') ? 'Dean of COeD' :
        (faculty.college_name === 'School of Graduates Studies') ? 'Dean of SGS' :
        (faculty.college_name === 'Not Match') ? 'No Match' : '';
      var deanTextLower = deanText.toLowerCase();
      var facultyInfo = facultyName + collegeName + deanTextLower;
      var facultyPhotoSrc = faculty.photo ? `forms/${faculty.photo}` : '/faculty/assets/img/no-prof.webp';
      // Check if faculty matches search query and  dean
      if (facultyInfo.includes(searchQuery) && Dean === 't') {
        resultsFound = true;
        var facultyHtml = `
          <div class="col-12 col-md-4" onclick="redirectToPage('${faculty.college_name}')">
            <div class="container-content bg-white shadow-sm rounded-3">
              <div class="text-center">
                <img class="collegeImage" src="${facultyPhotoSrc}" alt="faculty image">
                <h6>${faculty.college_name}</h6>
                <p class="text-maroon"><strong>${faculty.faculty_name}</strong></p>
                <p class="small">${deanText}</p>
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

  searchInput.addEventListener('input', filterFaculty);
  // Initial call to filter faculty
  filterFaculty();
</script>


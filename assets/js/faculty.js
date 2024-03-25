function research_toggleContent() {
    var facultyContent = document.querySelector('.faculty-content-research');
    var toggleIcon = document.querySelector('.toggle-icon');

    if (facultyContent.style.display === "none") {
      facultyContent.style.display = "block";
      toggleIcon.src = "assets/img/down.png";
    } else {
      facultyContent.style.display = "none";
      toggleIcon.src = "assets/img/caret-arrow-up.png"; 
    }
  }
function extension_toggleContent(){
    var facultyContent = document.querySelector('.faculty-content-extension');
    var toggleIcon = document.querySelector('.toggle-icon-extension');

    if (facultyContent.style.display === "none"){
      facultyContent.style.display = "block";
      toggleIcon.src = "assets/img/down.png";
    }else{
      facultyContent.style.display = "none";
      toggleIcon.src = "assets/img/caret-arrow-up.png"; 
    }
}
function designation_toggleContent(){
    var facultyContent = document.querySelector('.faculty-content-designation');
    var toggleIcon = document.querySelector('.toggle-icon-designation');

    if (facultyContent.style.display === "none"){
      facultyContent.style.display = "block";
      toggleIcon.src = "assets/img/down.png";
    }else{
      facultyContent.style.display = "none";
      toggleIcon.src = "assets/img/caret-arrow-up.png"; 
    }
}
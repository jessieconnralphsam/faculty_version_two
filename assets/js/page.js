function redirect(college_name) {
    switch (college_name) {
        case 'College of Agriculture':
            window.location.href = 'agri.php';
            break;
        case 'College of Engineering':
            window.location.href = 'eng.php';
            break;
        case 'College of Social Sciences and Humanities':
            window.location.href = 'ssh.php';
            break;
        case 'College of Fisheries':
            window.location.href = 'fisheries.php';
            break;
        case 'College of Medicine':
            window.location.href = 'medicine.php';
            break;
        case 'College of Business Administration and Accountacy':
            window.location.href = 'ba&a.php';
            break;
        case 'College of Natural Science and Mathematics':
            window.location.href = 'cnsm.php';
            break;
        case 'School of Graduate Studies':
            window.location.href = 'grad_school.php';
            break;
        case 'College of Education':
            window.location.href = 'educ.php';
            break;
        default:
            break;
    }
}
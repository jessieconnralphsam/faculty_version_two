
//first page
// Function to capture form data and navigate to the next page
function nextPage() {
    // Capture form data
    var formData = {
        fullName: document.getElementById('fullName').value,
        email: document.getElementById('email').value,
        // Capture other form fields similarly
    };

    // Store form data in cookies
    document.cookie = 'formData=' + JSON.stringify(formData);

    // Navigate to next page
    window.location.href = 'secondPage.html';
}
//second page
// Function to capture form data and navigate to the next page
function nextPage() {
    // Capture form data
    var formData = JSON.parse(getCookie('formData'));
    formData.additionalData = document.getElementById('additionalData').value;
    // Capture other form fields similarly

    // Store updated form data in cookies
    document.cookie = 'formData=' + JSON.stringify(formData);

    // Navigate to next page
    window.location.href = 'thirdPage.html';
}

// Function to get cookie by name
function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}
//third page
// Function to submit form data
function submitForm() {
    // Get form data
    var formData = JSON.parse(getCookie('formData'));

    // Submit form data (You can send it to a server or process it as needed)
    console.log(formData);
    // Handle form submission

    // Clear stored form data
    document.cookie = 'formData=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

    // Optionally, navigate to a confirmation page
    window.location.href = 'confirmationPage.html';
}

// Function to get cookie by name
function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}

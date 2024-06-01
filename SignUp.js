function validateForm() {
    var username = document.getElementById("username").value.trim();
    var firstname = document.getElementById("firstname").value.trim();
    var lastname = document.getElementById("lastname").value.trim();
    var email = document.getElementById("email").value.trim();
    var mobile = document.getElementById("phone").value.trim();
    var password = document.getElementById("password").value.trim();
    var confirmPassword = document.getElementById("confirmPassword").value.trim();

    var nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(username)) {
        alert("Invalid name. Only letters and spaces are allowed.");
        return false;
    }

    if (!nameRegex.test(firstname)) {
        alert("Invalid name. Only letters and spaces are allowed.");
        return false;
    }

    if (!nameRegex.test(lastname)) {
        alert("Invalid name. Only letters and spaces are allowed.");
        return false;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // var emailRegex = /^[\\w-_\.]*[\\w-_\.]\@[\\w]\.[\\w]+[\\w]$/;
    
    if (!emailRegex.test(email)) {
        alert("Invalid email address.");
        return false;
    }

    var mobileRegex = /^[0-9]{10}$/;
    if (!mobileRegex.test(mobile)) {
        alert("Invalid mobile number. Please enter a 10-digit number.");
        return false;
    }

    return true;
}
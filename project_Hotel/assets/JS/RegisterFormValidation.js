 document.getElementById("registrationForm").addEventListener("submit", function(event) {
    var firstName = document.getElementsByName("first_name")[0].value;
    var lastName = document.getElementsByName("last_name")[0].value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var zipCode = document.getElementById("zip_code").value;
    var password = document.getElementById("new_password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    // Validate first and last name (text only)
     if (!/^[a-zA-Z]+$/.test(firstName)) {
         alert("First name must contain only letters.");
         event.preventDefault();
         return;
     }

// Validate last name (text only)
     if (!/^[a-zA-Z]+$/.test(lastName)) {
         alert("Last name must contain only letters.");
         event.preventDefault();
         return;
     }

    // Validate email format
    if (!/@(gmail|outlook|yahoo)\.com$/.test(email)) {
    alert("Email must be in Gmail, Outlook, or Yahoo format.");
    event.preventDefault();
    return;
}

    // Validate phone number length
    if (phone.length > 8) {
    alert("Phone number must be at most 8 digits.");
    event.preventDefault();
    return;
}

    // Validate zip code length
    if (zipCode.length > 4) {
    alert("Zip code must be at most 4 digits.");
    event.preventDefault();
    return;
}

    // Validate passwords match
    if (password !== confirmPassword) {
    alert("Passwords do not match.");
    event.preventDefault();
    return;
}
});

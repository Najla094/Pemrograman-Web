const loginForm = document.getElementById('loginForm');
loginForm.addEventListener('submit', validateLoginForm);

function validateLoginForm(event) {
    event.preventDefault();

    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const errorMessages = document.getElementById('errorMessages');

    errorMessages.innerHTML = '';

    // Validate email
    if (!validateUsername(username.value)) {
        errorMessages.innerHTML += '<p>Please enter a valid Username.</p>';
        return;
    }

    // Validate password
    if (!validatePassword(password.value)) {
        errorMessages.innerHTML += '<p>Please enter a valid password.</p>';
        return;
    }

    // login succses
    loginSuccessful();
}

function  loginSuccessful() {
    alert('Login successful!');

    // mengarahkan ke halaman lain
    window.location.href = 'https://example.com/dashboard'; 
}

function validateUsername(username) {
   const expectedusername = "najla123";
   if (username === expectedusername) {
        console.log("Username is valid!");
        return true;
    } else {
        console.log("Invalid username. Please enter the correct username.");
        return false;
    }
}

function validatePassword(password) {
    const expectedpassword = "integrity";
   if (password === expectedpassword) {
        console.log("Username is valid!");
        return true;
    } else {
        console.log("Invalid username. Please enter the correct username.");
        return false;
    }
}
document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.querySelector('.wrapper');
    const registerLink = document.querySelector('.register-link');
    const loginLink = document.querySelector('.login-link');

    // 1. ANIMATION LOGIC (Fixes the sliding)
    if (registerLink && wrapper) {
        registerLink.onclick = (e) => {
            e.preventDefault(); // Prevents the page from reloading
            wrapper.classList.add('active');
        };
    }

    if (loginLink && wrapper) {
        loginLink.onclick = (e) => {
            e.preventDefault(); // Prevents the page from reloading
            wrapper.classList.remove('active');
        };
    }

    // 2. LOGIN SUBMISSION LOGIC
    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
        loginForm.addEventListener("submit", function (e) {
            // We removed e.preventDefault() here so the form 
            // actually sends the data to login.php
            const user = document.getElementById("loginUsername").value.trim();
            const pass = document.getElementById("loginPassword").value;

            if (user === "" || pass === "") {
                e.preventDefault();
                alert("Please enter both username and password");
            }
        });
    }

    // 3. REGISTER SUBMISSION LOGIC
    const registerForm = document.getElementById("registerForm");
    if (registerForm) {
        registerForm.addEventListener("submit", function (e) {
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();

            if (name === "" || email === "") {
                e.preventDefault();
                alert("All fields are required");
            }
        });
    }
});
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الونش - El Wensh</title>
  <link rel="icon" type="image/png" href="./static/assets/images/logo.png"/>
  <link rel="stylesheet" href="./static/styles/signup.css">
</head>
<body style="overflow: hidden; height: 100vh;">
    <img src="./static/assets/images/7.jpg" class="signup-image" style="padding-right: 30px; transform: translateX(-10%);">
    <div class="container">
        <form id="signupForm" class="form" action="signupp.php" method="post" onsubmit="return validateForm()">
            <h2 style="text-align: center; font-weight: bold;">Sign Up</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >
            <label id="error-username" class="error-msg">Please enter a username.</label>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            <label id="error-email" class="error-msg">Please enter a valid email address.</label>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            <label id="error-password" class="error-msg">Please enter a password.</label>

            <button type="submit" style="font-weight: bold;">Sign Up</button>
            <p style="text-align: center;">Already have an account? <a href="login.php" style="color: red; text-decoration: none;">Login</a></p>
        </form>
    </div>
    <script>
        function validateForm() {
            const username = document.getElementById('username').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            const errorUsername = document.getElementById('error-username');
            const errorEmail = document.getElementById('error-email');
            const errorPassword = document.getElementById('error-password');

            let isValid = true;

            if (username === '') {
                errorUsername.style.display = 'block';
                document.getElementById('username').classList.add('error-input');
                isValid = false;
            } else {
                errorUsername.style.display = 'none';
                document.getElementById('username').classList.remove('error-input');
            }

            if (email === '') {
                errorEmail.style.display = 'block';
                document.getElementById('email').classList.add('error-input');
                isValid = false;
            } else {
                errorEmail.style.display = 'none';
                document.getElementById('email').classList.remove('error-input');
            }

            if (password === '') {
                errorPassword.style.display = 'block';
                document.getElementById('password').classList.add('error-input');
                isValid = false;
            } else {
                errorPassword.style.display = 'none';
                document.getElementById('password').classList.remove('error-input');
            }

            return isValid;
        }
    </script>
</body>
</html>

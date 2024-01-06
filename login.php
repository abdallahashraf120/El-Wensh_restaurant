<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الونش - El Wensh</title>
  <link rel="icon" type="image/png" href="./static/assets/images/logo.png"/>
  <link rel="stylesheet" href="./static/styles/login.css">
</head>
<body style="overflow: hidden; height: 100vh;">
  
  <img src="./static/assets/images/7.jpg"  class="login-image" style="padding-right: 30px; transform: translateX(-10%); ">

  <div class="container">
   
    <form id="loginForm" class="form" action="loginn.php" method="post" onsubmit="return validateForm()">
      <h2 style="text-align: center; font-weight: bold;">Login</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" >

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" >
      
      <p id="error-msg" style="color: red; display: none;"></p>
      <?php
        if (isset($_GET['error'])) {
          echo '<b><h5 class="error">' . $_GET['error'] . '</h5></b>';
        }
      ?>

      <button type="submit" style="font-weight: bold;">Login</button>
      <br>
      <p style="text-align: center; margin-bottom: 0px; margin-top: 10px;">Forget your password? <a href="#" id="forgotPassword" style="color: red; text-decoration: none;">Click here</a></p>
      <p style="text-align: center;">Don't have an account? <a href="./signup.php" style="color: red; text-decoration: none;">Sign up</a></p>
    </form>

  </div>

  <script>
    document.getElementById('forgotPassword').addEventListener('click', function(event) {
      event.preventDefault();
      alert('The Reset Password Link has been sent to your Email');
    });

    function validateForm() {
      const username = document.getElementById('username');
      const password = document.getElementById('password');
      const errorMsg = document.getElementById('error-msg');

      if (username.value.trim() === '') {
        username.classList.add('error-input');
      } else {
        username.classList.remove('error-input');
      }

      if (password.value.trim() === '') {
        password.classList.add('error-input');
      } else {
        password.classList.remove('error-input');
      }

      if (username.value.trim() === '' && password.value.trim() === '') {
        errorMsg.textContent = 'Please enter both username and password.';
        errorMsg.style.display = 'block';
        return false; 
      } else if (username.value.trim() === '' && password.value.trim() !== '') {
        errorMsg.textContent = 'Please enter your username.';
        errorMsg.style.display = 'block';
        return false; 
      } else if (username.value.trim() !== '' && password.value.trim() === '') {
        errorMsg.textContent = 'Please enter your password.';
        errorMsg.style.display = 'block';
        return false;
      }

      errorMsg.style.display = 'none';
      return true; 
    }
  </script>
  
</body>
</html>
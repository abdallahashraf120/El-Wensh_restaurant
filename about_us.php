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
    <link rel="stylesheet" href="./static/styles/about_us.css" />
    <link rel="stylesheet" href="./static/styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="header_left">
    
          <img  src="./static/assets/images/logo.png" style="width: 55px; height: 50px; " >
          <a href="index.html" class="logo" style="color: #ffcc00;;"  >الونش - El Wensh</a>
        </div>
    
        
        <div class="header_right">
         <a  href="#cart"> <i class="fa fa-shopping-cart" style="font-size:30px; margin-right: 20px; width: fit-content;" ></i></a>
         <?php

if (isset($_SESSION['username'])) {
    echo '<a id="login" href="#" style="background-color: #ffcc00; font-weight: bold; border-radius: 7px;  font-size: large;" >'. $_SESSION['username'] . '</a>';
    echo '<a href="./logout.php">log out </a></li>';
} else {
    echo '          <a id="login" href="login.php" style="background-color: #ffcc00; font-weight: bold; border-radius: 7px;  font-size: large;" >Login</a>
    ';
}
?>    
        
        </div>
      </div>
    </div>    

    
        <h1 style="text-align: center; padding: 1rem; font-style: italic; font-weight: bolder;" >Our Team</h1>   
        <hr>
    <div class="about_show about_show1">
        <img src="./static/assets/images/abdallah.jpeg" height="320px" width="260px" style="border-radius: 20px;">
        <div class="about_text about_text1">
        <h1>Abdallah Ashraf</h1>
        <p>I'am a dedicated and hardworking individual who consistently strives to achieve excellence in all their 
            endeavors. I possess a strong passion for Front-end development, and have demonstrated exceptional skills in 
            [React.js , HTML 5, CSS 3 , J.S , Team leader , Game development]. I'am an excellent team worker and has shown great leadership 
            qualities when working with others. My positive attitude and eagerness to learn have been an asset to any project 
            they are involved in. I have no doubt that I will continue to excel and make valuable contributions in their future 
            endeavors.</p>
        </div> 
    </div><div class="about_show about_show2">
        <img src="./static/assets/images/mohamed adel.jpeg" height="340px" width="260px" style="border-radius: 20px; ">
        <div class="about_text about_text2">
        <h1>Mohamed Adel</h1>
        <p>I'am a dedicated and hardworking individual who consistently strives to achieve excellence in all their 
            endeavors. I possess a strong passion for Front-end development, and have demonstrated exceptional skills in 
            [Cyber security , HTML 5, CSS 3 , J.S , ethicle hacking , CCNA , System security]. I'am an excellent team worker and has shown great leadership 
            qualities when working with others. My positive attitude and eagerness to learn have been an asset to any project 
            they are involved in. I have no doubt that I will continue to excel and make valuable contributions in their future 
            endeavors.</p>
        </div> 
    </div>
    <footer>
        <img src="./static/assets/images/logo.png" class="footer-logo">
        <ul class="footer-links">
            <li><a href="sweet.php">Sweet Menu</a></li>
            <li><a href="Shabey.php">Shabey Menu</a></li>
            <li><a href="pizza.php">Pizza Menu</a></li>
            <li><a href="pasta.php">Pasta Menu</a></li>
            <li><a href="crepe.php">Crepe Menu</a></li>
        </ul>
        <p class="copyright">© 2023 الونش - El Wensh . All rights reserved.</p>
      </footer>
    
</body>
</html>
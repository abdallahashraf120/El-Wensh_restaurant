<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./static/assets/images/logo.png" />
    <link rel="stylesheet" href="./static/styles/menu.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>الونش - El Wensh</title>
  </head>
  <body>
  <div class="header">
    <div class="header_left">

      <img  src="./static/assets/images/logo.png" style="width: 55px; height: 50px; " >
      <a href="index.html" class="logo" style="color: #ffcc00;;"  >الونش - El Wensh</a>
    </div>

    
    <div class="header_right">

      
     <?php

if (isset($_SESSION['username'])) { 

  echo '<a id="login" href="#" style="background-color: #ffcc00; font-weight: bold; border-radius: 7px;  font-size: large;" >'. $_SESSION['username'] . '</a>';
  echo '<a href="./logout.php">log out </a></li>';
} else {

  echo ' <a id="login" href="login.php" style="background-color: #ffcc00; font-weight: bold; border-radius: 7px;  font-size: large;" >Login</a>';
}
?>    
 <a href="cart.php">
            <i class="fa fa-shopping-cart" style="font-size:30px; margin-right: 20px; width: fit-content;"></i>
            <span id="cartItemCount" style="font-size: 14px; position: absolute; top: 8px; right: 30px; background-color: #ffcc00; color: #000; border-radius: 50%; padding: 3px 7px;"></span>
        </a>
    </div>
  </div>
</div>  
    <h1 style="text-align: center; font-size: 50px; font-style: oblique;  transform: translateY(40%); padding-bottom: 10px; ">Pasta Menu</h1>
    <div class="cards">
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Shrimp-Pasta.png" alt="creep" draggable="false" style="width: 450px; transform: translate(-50%, 5%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Shrimp Pasta</h1>
          <br>
          <p>A delicious pasta dish with shrimp and a creamy sauce.</p>
        </div>
       
        <br>
       
        <p>Price: 60.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Shrimp Pasta', '60.00')">Add To cart</button>
      </div>
</div>
    
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Hawaiian-Chicken-Pasta.png" alt="creep" draggable="false"  style="width: 350px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Hawaiian Chicken Pasta</h1>
          <br>
          <p>A tasty pasta dish with chicken and a Hawaiian twist.</p>
        </div>
       
        <br>
       
        <p>Price: 55.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Hawaiian Chicken Pasta', '55.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Bolognese-Pasta.png" alt="creep" draggable="false" style="width: 420px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Bolognese Pasta</h1>
          <br>
          <p>A classic pasta dish with a rich and flavorful Bolognese sauce.</p>
        </div>
       
        <br>
       
        <p>Price: 50.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Bolognese Pasta', '50.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Buffalo-Pomodoro-Pasta.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Buffalo Pomodoro Pasta</h1>
          <br>
          <p>A spicy pasta dish with buffalo sauce and pomodoro.</p>
        </div>
       
        <br>
      
        <p>Price: 45.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Buffalo Pomodoro Pasta', '45.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Carbonara-Pasta.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Carbonara Pasta</h1>
          <br>
          <p>A creamy pasta dish with a carbonara sauce.</p>
        </div>
       
        <br>
       
        <p>Price: 45.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Carbonara Pasta', '45.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Gamberoni-Pasta.png" alt="creep" draggable="false" style="width: 380px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Gamberoni Pasta</h1>
          <br>
          <p>A delicious pasta dish with gamberoni (large prawns).</p>
        </div>
       
        <br>
       
        <p>Price: 65.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Gamberoni Pasta', '65.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Marco-Polo-Pasta.png" alt="creep" draggable="false" style="width: 450px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Marco Polo Pasta</h1>
          <br>
          <p>A tasty pasta dish with a Marco Polo twist.</p>
        </div>
       
        <br>
        
        <p>Price: 40.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Marco Polo Pasta', '40.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Meat-Pasta.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Meat Pasta</h1>
          <br>
          <p>A classic pasta dish with a rich and flavorful meat sauce.</p>
        </div>
       
        <br>
       
        <p>Price: 35.00  EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Meat Pasta', '35.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Spicy-Sausage-Pasta.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 30%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Spicy Sausage Pasta</h1>
          <br>
          <p>A spicy pasta dish with sausage.</p>
        </div>
       
        <br>
     
        <p>Price: 35.00  EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Spicy Sausage Pasta', '35.00')">Add To cart</button>
      </div>
    </div>
  </div>



  <footer>
    <img src="./static/assets/images/logo.png"  class="footer-logo" >
    <ul class="footer-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="about_us.php">About us</a></li>
    </ul>
    <ul class="footer-links">
      <li><a href="sweet.php">Sweet Menu</a></li>
      <li><a href="Shabey.php">Shabey Menu</a></li>
      <li><a href="pizza.php">Pizza Menu</a></li>
      <li><a href="crepe.php">Crepe Menu</a></li>
  </ul>
    <p class="copyright">&copy; 2023 الونش - El Wensh . All rights reserved.</p>
  </footer>
  <script>

      const cart = JSON.parse(localStorage.getItem('cart')) || [];

      function addToCart(itemName, price) {
        const item = {
          name: itemName,
          price: price,
          quantity: 1 
        };

        const existingItemIndex = cart.findIndex(cartItem => cartItem.name === itemName);
        if (existingItemIndex !== -1) {

          cart[existingItemIndex].quantity++;
        } else {

          cart.push(item);
        }

        localStorage.setItem('cart', JSON.stringify(cart));

        
        window.location.reload();
      }
      function updateCartItemCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartItemCount = cart.reduce((total, item) => total + item.quantity, 0);
        document.getElementById('cartItemCount').textContent = cartItemCount;
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateCartItemCount();
    });

    window.addEventListener('storage', (event) => {
        if (event.key === 'cart') {
            updateCartItemCount();
        }
    });
  </script>


   
   
  </body>
</html>

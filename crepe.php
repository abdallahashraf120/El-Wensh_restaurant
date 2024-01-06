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
    <h1 style="text-align: center; font-size: 50px; font-style: oblique; transform: translateY(70%)">Crepe Menu</h1>
   
    <div class="cards">
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Chicken-Katyousha-Crepe.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Chicken Katyousha Crepe</h1>
          <br>
          <p class="description">A delicious crepe filled with chicken and Katyousha sauce.</p>
        </div>
        <br>
        <p>Price: 50.00 EGP </p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Chicken Katyousha Crepe', '50.00')">Add To cart</button>
      </div>
    
</div>

    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Meat-Kofta-Crepe.png" alt="creep" draggable="false"  style="width: 400px; transform: translate(-45%, 20%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Meat Kofta Crepe</h1>
          <br>
          <p class="description">A savory crepe filled with flavorful meat kofta.</p>
        </div>
        
        <br>
     
        <p>Price: 55.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Meat Kofta Crepe', '55.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Chicken-Strips-Crepe.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 40%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Chicken Strips Crepe</h1>
          <br>
          <p class="description">A tasty crepe filled with crispy chicken strips.</p>
        </div>
        
        <br>
        
        <p>Price: 60.00 EGP </p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Chicken Strips Crepe', '60.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Shish-Tawook-Crepe.png" alt="creep" draggable="false"style="width: 380px; transform: translate(-48%, 30%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Shish Tawook Crepe</h1>
          <br>
          <p class="description">A mouth-watering crepe filled with shish tawook.</p>
        </div>
        
        <br>
        
        <p>Price: 60.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Shish Tawook Crepe', '60.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Chicken-Shawerma-Crepe.png" alt="creep" draggable="false" style="width: 420px; transform: translate(-50%, 20%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Chicken Shawerma Crepe</h1>
          <br>
          <p class="description">A scrumptious crepe filled with chicken shawerma.</p>
        </div>
        
        <br>
       
        <p>Price: 65.00 EGP </p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Chicken Shawerma Crepe', '65.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Chicken-Breasts-Crepe.png" alt="creep" draggable="false" style="width: 380px; transform: translate(-50%, 20%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Chicken Breasts Crepe</h1>
          <br>
          <p class="description"> A delightful crepe filled with chicken breasts.</p>
        </div>
        
        <br>
      
        <p>Price: 65.00 EGP </p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Chicken Breasts Crepe', '65.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Sausage-Crepe.png" alt="creep" draggable="false" style="width: 500px; transform: translate(-50%, 10%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Sausage Crepe</h1>
          <br>
          <p class="description">A delicious crepe filled with sausage.</p>
        </div>
        
        <br>
      
        <p>Price: 60.00 EGP </p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Sausage Crepe', '60.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Fries-Crepe.png" alt="creep" draggable="false" style="width: 480px; transform: translate(-43%, 0.5%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Fries Crepe</h1>
          <br>
          <p class="description">A tasty crepe filled with fries.</p>
        </div>
        
        <br>
        
        <p>Price: 40.00 EGP </p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Fries Crepe', '40.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Beef-Burger-Crepe.png" alt="creep" draggable="false" style="width: 380px; transform: translate(-50%, 20%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Beef Burger Crepe</h1>
          <br>
          <p class="description">A scrumptious crepe filled with beef burger.</p>
        </div>
        
        <br>
       
        <p>Price: 55.00 EGP </p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Beef Burger Crepe', '55.00')">Add To cart</button>
      </div>
    </div>
  </div>




  <footer>
    <img src="./static/assets/images/logo.png" class="footer-logo">
    <ul class="footer-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="about_us.php">About us</a></li>
    </ul> 
    <ul class="footer-links">
      <li><a href="sweet.php">Sweet Menu</a></li>
      <li><a href="Shabey.php">Shabey Menu</a></li>
      <li><a href="pizza.php">Pizza Menu</a></li>
      <li><a href="pasta.php">Pasta Menu</a></li>
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

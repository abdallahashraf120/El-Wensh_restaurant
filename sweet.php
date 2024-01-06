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

    <h1 style="text-align: center; font-size: 50px; font-style: oblique;  transform: translateY(80%); padding-bottom: 10px; ">Sweet Menu</h1>
    <div class="cards">
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Nutella-Sandwich.png" alt="creep" draggable="false" style="width: 380px; transform: translate(-50%, 1%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Nutella Sandwich</h1>
          <br>
          <p>A delicious sandwich filled with creamy Nutella.</p>
        </div>
        
        <br>
        
        <p>Price: 20.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Nutella Sandwich', '20.00')">Add To cart</button>
      </div>
</div>
    
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Jam-with-Qeshta.png" alt="creep" draggable="false"  style="width: 380px; transform: translate(-50%, 1%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Jam with Qeshta</h1>
          <br>
          <p>A sweet treat of jam and Qeshta, a type of clotted cream.</p>
        </div>
        
        <br>
        
        <p>Price: 8.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Jam with Qeshta', '8.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Sakalans.png" alt="creep" draggable="false" style="width: 380px; transform: translate(-50%, 3%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Sakalans</h1>
          <br>
          <p>A traditional Egyptian dish, perfect for a hearty breakfast.</p>
        </div>
        
        <br>
        
        <p>Price: 15.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Sakalans', '15.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Halawa-with-Qeshta.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Halawa with Qeshta</h1>
          <br>
          <p>A sweet dish of Halawa paired with Qeshta.</p>
        </div>
        
        <br>
       
        <p>Price: 12.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Halawa with Qeshta', '12.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Konafa-Asawer-Lotus.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Konafa Asawer Lotus</h1>
          <br>
          <p>A delicious Konafa filled with Lotus Biscoff spread, 15 pieces.</p>
        </div>
        
        <br>
        
        <p>Price: 40.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Konafa Asawer Lotus', '40.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Konafa-Asawer-Nutella.png" alt="creep" draggable="false" style="width: 500px; transform: translate(-50%, -7%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Konafa Asawer Nutella</h1>
          <br>
          <p>A delicious Konafa filled with creamy Nutella, 4 pieces.</p>
        </div>
        
        <br>
        
        <p>Price: 25.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Konafa Asawer Nutella', '25.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Soft-Nabulsi-Konafa.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 25%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Soft Nabulsi Konafa</h1>
          <br>
          <p>A soft and sweet Nabulsi Konafa, a Middle Eastern dessert.</p>
        </div>
        
        <br>
       
        <p>Price: 30.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Soft Nabulsi Konafa', '30.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Sugar-Mille-Feuille.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 10%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Sugar Mille Feuille</h1>
          <br>
          <p>A sweet and flaky pastry layered with sugar, 3 pieces.</p>
        </div>
        
        <br>
      
        <p>Price: 40.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Sugar Mille Feuille', '15.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Pistachio-Basbousa.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Pistachio Basbousa</h1>
          <br>
          <p>A Middle Eastern basbosa topped with pistachios, 4 pieces.</p>
        </div>
        
        <br>
      
        <p>Price: 30.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Pistachio Basbousa', '30.00')">Add To cart</button>
      </div>
    </div>
  </div>



  <footer>
    <img src="./static/assets/images/logo.png" class="footer-logo" >
    <ul class="footer-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="about_us.php">About us</a></li>
    </ul>
    <ul class="footer-links">
      <li><a href="crepe.php">Crepe Menu</a></li>
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

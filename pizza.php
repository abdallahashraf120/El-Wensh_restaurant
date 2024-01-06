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
    <h1 style="text-align: center; font-size: 50px; font-style: oblique;  padding-bottom: 10px; padding-top: 3rem;">Pizza Menu</h1>
    <div class="cards">
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Cheese-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Cheese Pizza</h1>
          <br>
          <p>A classic pizza topped with gourmet cheese.</p>
        </div>
        <br>
        
        <p>Price: 55.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Cheese Pizza', '55.00')">Add To cart</button>
      </div>
</div>
    
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Chicken-Ranch-Pizza.png" alt="creep" draggable="false"  style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Chicken Ranch Pizza</h1>
          <br>
          <p>A delicious pizza topped with chicken and ranch dressing.</p>
        </div>

        <br>
       
        <p>Price: 70.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Chicken Ranch Pizza', '70.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Margherita-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Margherita Pizza</h1>
          <br>
          <p>A classic pizza with tomatoes, mozzarella, and basil.</p>
        </div>

        <br>
        
        <p>Price: 50.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Margherita Pizza', '50.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Meat-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Meat Pizza</h1>
          <br>
          <p>A hearty pizza topped with various meats.</p>
        </div>

        <br>
        
        <p>Price: 75.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Meat Pizza', '75.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Pepperoni-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Pepperoni Pizza</h1>
          <br>
          <p>A pizza classic with pepperoni slices.</p>
        </div>

        <br>
       
        <p>Price: 65.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Pepperoni Pizza', '65.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Seafood-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Seafood Pizza</h1>
          <br>
          <p>A delicious pizza topped with various seafood.</p>
        </div>

        <br>
       
        <p>Price: 90.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Seafood Pizza', '90.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Vegetables-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Vegetables Pizza</h1>
          <br>
          <p>A healthy pizza topped with various vegetables.</p>
        </div>

        <br>
        
        <p>Price: 50.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Vegetables Pizza', '50.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Supreme-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Supreme Pizza</h1>
          <br>
          <p>A pizza loaded with all the toppings.</p>
        </div>

        <br>
        
        <p>Price: 75.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Supreme Pizza', '75.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Spicy-Taco-Pizza.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Spicy Taco Pizza</h1>
          <br>
          <p>A pizza with a spicy taco twist for those who like it hot.</p>
        </div>

        <br>
        
        <p>Price: 55.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Spicy Taco Pizza', '55.00')">Add To cart</button>
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
      <li><a href="crepe.php">Crepe Menu</a></li>
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

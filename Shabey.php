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
    <h1 style="text-align: center; font-size: 50px; font-style: oblique;  transform: translateY(60%); padding-bottom: 10px; ">Shabey Menu</h1>
    <div class="cards">
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Eftekasa.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 5%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Eftekasa</h1>
          <br>
          <p>A traditional Egyptian sandwich.</p>
        </div>
        <br>
        <p>Price: 15.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Eftekasa', '15.00')">Add To cart</button>
      </div>
</div>
    
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Spicy-Foul.png" alt="creep" draggable="false"  style="width: 550px; transform: translate(-50%, 1%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Spicy Foul</h1>
          <br>
          <p>A spicy version of the classic Egyptian sandwich, Foul.</p>
        </div>
       
        <br>
        
        <p>Price: 10.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Spicy Foul', '10.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Fried-Roomi-Cheese.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 5%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Fried Roomi Cheese</h1>
          <br>
          <p>Delicious fried Roomi cheese, a popular Egyptian snack.</p>
        </div>
       
        <br>
        
        <p>Price: 15.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Fried Roomi Cheese', '15.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Shish-Tawook.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 10%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Shish Tawook</h1>
          <br>
          <p>A Middle Eastern sandwich of marinated chicken skewers.</p>
        </div>
       
        <br>
       
        <p>Price: 30.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Shish Tawook', '30.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Alexandrian-Liver.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 8%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Alexandrian Liver</h1>
          <br>
          <p>A spicy liver sandwich from Alexandria.</p>
        </div>
       
        <br>
        
        <p>Price: 20.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Alexandrian Liver', '20.00')">Add To cart</button>
      </div>
    </div><div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Egyptian-Sojouk.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 10%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Egyptian Sojouk</h1>
          <br>
          <p>A flavorful Egyptian sausage sandwich.</p>
        </div>
       
        <br>
        
        <p>Price: 25.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Egyptian Sojouk', '25.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Regular-Taamia.png" alt="creep" draggable="false" style="width: 500px; transform: translate(-50%, 5%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Regular Taa'mia</h1>
          <br>
          <p>A traditional Egyptian falafel sandwich.</p>
        </div>
       
        <br>
        
        <p>Price: 10 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Regular Taamia', '15.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Feta-Cheese-with-Tomatoes.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-48%, 5%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Feta Cheese with Tomatoes</h1>
          <br>
          <p>A delicious combination of feta cheese and tomatoes.</p>
        </div>
       
        <br>
        
        <p>Price: 8.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Feta Cheese with Tomatoes', '8.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
      <div class="card_img">
        <img src="./static/assets/images/Regular-Frise.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 20%);"/>
      </div>
      <div class="card_text">
        <div class="card_text_title">
          <h1>Regular Frise</h1>
          <br>
          <p>Classic crispy fries, a favorite sandwich dish for many.</p>
        </div>
       
        <br>
        
        <p>Price: 10.00 EGP</p>
        <br>
        <br>
        <button type="button" class="card_btn" onclick="addToCart('Regular Frise', '10.00')">Add To cart</button>
      </div>
    </div>
    <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Fries-with-Mix-Cheese.png" alt="creep" draggable="false" style="width: 450px; transform: translate(-50%, 10%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Fries with Mix Cheese</h1>
            <br>
            <p>Crispy fries topped with a mix of delicious cheeses.</p>
          </div>
          
          <br>
          
          <p>Price: 15.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Fries with Mix Cheese', '15.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Fries-with-Eggplant.png" alt="creep" draggable="false" style="width: 500px; transform: translate(-50%, 5%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Fries with Eggplant</h1>
            <br>
            <p>Crispy fries sandwich served with delicious eggplant.</p>
          </div>
          <br>
          <p>Price: 12.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Fries with Eggplant', '12.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Regular-Foul.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 20%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Regular Foul</h1>
            <br>
            <p>A traditional Egyptian dish made with fava beans.</p>
          </div>
          
          <br>
          
          <p>Price: 10.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Regular Foul', '10.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Alexandrian-Foul.png" alt="creep" draggable="false" style="width: 450px; transform: translate(-50%, 15%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Alexandrian Foul</h1>
            <br>
            <p>A variant of the traditional Egyptian dish, Foul.</p>
          </div>
          
          <br>
          
          <p>Price: 12.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Alexandrian Foul', '12.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Taamia-with-Hummus.png" alt="creep" draggable="false" style="width: 500px; transform: translate(-50%, 6%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Taa'mia with Hummus</h1>
            <br>
            <p>Traditional Egyptian falafel made with fava beans.</p>
          </div>
          
          <br>
          
          <p>Price: 12.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Taamia with Hummus', '12.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Foul-with-Baba-Ghanoug.png" alt="creep" draggable="false" style="width: 320px; transform: translate(-50%, 15%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Foul with Baba Ghanoug</h1>
            <br>
            <p>A delicious combination of Foul and Baba Ghanoug.</p>
          </div>
          
          <br>
          
          <p>Price: 12.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Foul with Baba Ghanoug', '12.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Sausage-Scrambled-Eggs.png" alt="creep" draggable="false" style="width: 330px; transform: translate(-50%, 5%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Sausage Scrambled Eggs</h1>
            <br>
            <p>Scrambled eggs with sausage, a hearty breakfast dish.</p>
          </div>
          
          <br>
          
          <p>Price: 20.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Sausage Scrambled Eggs', '20.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Smoked-Jalapeno-Fries.png" alt="creep" draggable="false" style="width: 400px; transform: translate(-50%, 18%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Smoked Jalapeno Fries</h1>
            <br>
            <p>Fries with a kick of smoked jalapeno flavor.</p>
          </div>
          
          <br>
          
          <p>Price: 20.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Smoked Jalapeno Fries', '20.00')">Add To cart</button>
        </div>
      </div>
      <div class="card">
        <div class="card_img">
          <img src="./static/assets/images/Omelet-Vegetables.png" alt="creep" draggable="false" style="width: 350px; transform: translate(-50%, 25%);"/>
        </div>
        <div class="card_text">
          <div class="card_text_title">
            <h1>Omelet Vegetables</h1>
            <br>
            <p>A healthy omelet packed with fresh vegetables.</p>
          </div>
          
          <br>
          
          <p>Price: 20.00 EGP</p>
          <br>
          <br>
          <button type="button" class="card_btn" onclick="addToCart('Omelet Vegetables', '20.00')">Add To cart</button>
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
      <li><a href="crepe.php">Crepe Menu</a></li>
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

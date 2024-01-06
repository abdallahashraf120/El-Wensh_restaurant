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
    <link rel="stylesheet" href="./static/styles/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="header_left">
            <img src="./static/assets/images/logo.png" style="width: 55px; height: 50px;">
            <a href="index.html" class="logo" style="color: #ffcc00;">الونش - El Wensh</a>
        </div>
        <div class="header_right">
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


    <div class="cards" id="cartItems"></div>
  
     

    <div style="text-align: center;">
        <p>Subtotal: <span id="subtotalPrice">0</span> EGP</p>
        <p>Tax (5%): <span id="tax">0</span> EGP</p>
        <p>Total Price: <span id="totalPrice">0</span> EGP</p>
        <button id="checkoutBtn" onclick="checkout()">Checkout</button>
    </div>

    <script>
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartItemsElement = document.getElementById('cartItems');
        const totalPriceElement = document.getElementById('totalPrice');

        function createCard(item, index) {
            const card = document.createElement('div');
            card.classList.add('card');

            const cardImg = document.createElement('img');
            cardImg.src = `./static/assets/images/${getImageName(item.name)}.png`;
            cardImg.alt = item.name;

            const itemName = document.createElement('h3');
            itemName.textContent = item.name;

            const itemPrice = document.createElement('p');
            itemPrice.textContent = `Price: ${item.price} EGP`;

            const quantityInput = document.createElement('input');
            quantityInput.classList.add('quantity-input');
            quantityInput.type = 'number';
            quantityInput.min = '1';
            quantityInput.value = item.quantity;
            quantityInput.onchange = function() {
                cart[index].quantity = parseInt(quantityInput.value);
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCart();
            };

            const removeBtn = document.createElement('button');
            removeBtn.textContent = '🗑️';
            removeBtn.onclick = function() {
                removeItem(index);
            };

            card.appendChild(cardImg);
            card.appendChild(itemName);
            card.appendChild(itemPrice);
            card.appendChild(quantityInput);
            card.appendChild(removeBtn);

            return card;
        }

        function removeItem(index) {
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            renderCart();
        }

        function calculateTotalPrice() {
            let total = 0;
            cart.forEach(item => {
                total += parseFloat(item.price) * parseInt(item.quantity);
            });
            return total.toFixed(2);
        }

        function calculateTax() {
            let tax = 0;
            tax = 0.05 * calculateTotalPrice(); 
            return tax.toFixed(2);
        }

        function updateTotalPrice() {
            const subtotal = calculateTotalPrice();
            const tax = calculateTax();
            const totalPrice = parseFloat(subtotal) + parseFloat(tax);

            document.getElementById('subtotalPrice').textContent = subtotal;
            document.getElementById('tax').textContent = tax;
            totalPriceElement.textContent = totalPrice.toFixed(2);
        }

        function checkout() {
        if (!localStorage.getItem('cart')) {
            alert('Your cart is empty!');
            
        } else if (!<?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>) {
            alert('You are not logged in! Please login to proceed.');
            window.location.href = 'login.php';

            } else {
                alert('Checkout Successfully ✅');
                localStorage.removeItem('cart');
                cart.length = 0;
                renderCart();
                window.location.reload();
            }
        }
    

    document.addEventListener('DOMContentLoaded', () => {
        renderCart();
    });
        function getImageName(itemName) {
            return itemName.toLowerCase().replace(/\s/g, '-');
        }

        function renderCart() {
            cartItemsElement.innerHTML = '';
            cart.forEach((item, index) => {
                const card = createCard(item, index);
                cartItemsElement.appendChild(card);
            });
            updateTotalPrice();
        }

        renderCart();

        function updateCartItemCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartItemCount = cart.reduce((total, item) => total + item.quantity, 0);
        document.getElementById('cartItemCount').textContent = cartItemCount;
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateCartItemCount();
    });
    </script>
</body>
</html>

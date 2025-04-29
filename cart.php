<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Cart - LABELLA</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>

    /* === Cart Page Styling === */

.cart-container {
  max-width: 1100px;
  margin: 50px auto;
  padding: 0 20px;
  font-family: 'Segoe UI', sans-serif;
}

.cart-container h1 {
  font-size: 2rem;
  text-align: center;
  margin-bottom: 30px;
  color: #b93160;
}

.cart-item {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 15px;
  border: 1px solid #f3d1dc;
  border-radius: 15px;
  margin-bottom: 20px;
  background-color: #fff0f6;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  gap: 20px;
  position: relative;
}

.cart-item img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 10px;
  margin-right: 20px;
}

.item-info {
  flex: 1;
  min-width: 250px;
}

.item-info h4 {
  font-size: 1.1rem;
  color: #444;
}

.item-info p {
  margin: 5px 0;
  font-size: 0.95rem;
  color: #777;
}

..quantity {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  gap: 10px;
}

.quantity button {
  padding: 5px 10px;
  border: none;
  background-color: #b93160;
  color: white;
  font-size: 1rem;
  cursor: pointer;
  border-radius: 5px;
  margin: 0 5px;
  transition: background-color 0.3s;
}

.quantity button:hover {
  background-color: #8a2348;
}

.remove {
  background-color: transparent;
  color: #c0392b;
  border: none;
  margin-top: 5px;
  cursor: pointer;
  text-decoration: underline;
  font-size: 0.9rem;
}

.cart-summary {
  margin-top: 30px;
  text-align: center;
}

.cart-summary h3 {
  font-size: 1.4rem;
  margin-bottom: 20px;
  color: #444;
}

.cart-summary button {
  padding: 10px 20px;
  margin: 0 10px;
  border: none;
  font-size: 1rem;
  border-radius: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
}

#clear-cart {
  background-color: #ff4d6d;
  color: white;
}

#checkout-btn {
  background-color: #b93160;
  color: white;
}

#clear-cart:hover {
  background-color: #cc3c59;
}

#checkout-btn:hover {
  background-color: #8a2348;
}

.cart-layout {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  min-height: 80vh;
  overflow: hidden;
}

.cart-image-side {
  width: 50%;
  background-color: #fef6fa;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2rem;
}

.cart-image-side img {
  width: 100%;
  max-width: 500px;
  border-radius: 20px;
  object-fit: cover;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.cart-container {
  width: 50%;
  max-width: 600px;
  padding: 2rem;
  background: #fff;
  box-shadow: -2px 0 10px rgba(0, 0, 0, 0.05);
  overflow-y: auto;
  overflow-x: hidden;
  flex-shrink: 0;
  max-height: 100vh; /* prevent it from growing beyond the viewport */
}



/* Responsive Styling */
@media (max-width: 768px) {
  .cart-item {
    flex-direction: column;
    text-align: center;
  }

  .cart-item img {
    margin-bottom: 15px;
  }

  .quantity {
    justify-content: center;
  }
}

@media (max-width: 768px) {
  .cart-layout {
    flex-direction: column;
  }

  .cart-image-side,
  .cart-container {
    width: 100%;
  }

  .cart-image-side img {
    max-width: 100%;
  }
}


  </style>
</head>
<body>

<nav>
  <div class="logo">
    <a href="index.html">LABELLA</a>
    <span>Where Beauty Lies</span>
  </div>
  <ul>
    <li><a href="home.html"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="shop.php"><i class="fas fa-store"></i> Shop</a></li>
    <li><a href="cart.php" class="cart-link">
      <i class="fa fa-shopping-cart"></i> Cart (<span id="cart-count">0</span>)
    </a></li>
    <li><a href="logout.php"><i class="fas fa-user"></i> Logout</a></li>
  </ul>
</nav>

<div class="cart-layout">
  <div class="cart-image-side">
    <img src="https://images.pexels.com/photos/2536965/pexels-photo-2536965.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Shopping Beauty" />
  </div>

  <div class="cart-container">
    <!-- Cart items and actions go here -->

        <h1>Your Cart</h1>
     <div id="cart-items"></div>

     <div class="cart-summary">
        <h3>Total: Ksh <span id="cart-total"> 0.00</span></h3>
        <button id="clear-cart">Clear Cart</button>
        <button id="checkout-btn">Checkout</button>
  </div>
  </div>
</div>

<footer>
  <p>&copy; 2025 LABELLA. All rights reserved. <i class="fas fa-kiss-wink-heart"></i></p>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const cartCount = document.getElementById('cart-count');
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function renderCart() {
      cartItemsContainer.innerHTML = '';
      let total = 0;

      cart.forEach((item, index) => {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const itemHTML = `
          <div class="cart-item">
            <img src="${item.image}" alt="${item.name}">
            <div class="item-info">
              <h4>${item.name}</h4>
              <p>Ksh ${item.price.toFixed(2)}</p>
              <div class="quantity">
                <button class="decrease" data-index="${index}">-</button>
                <span>${item.quantity}</span>
                <button class="increase" data-index="${index}">+</button>
              </div>
              <p>Total: Ksh ${subtotal.toFixed(2)}</p>
              <button class="remove" data-index="${index}">Remove</button>
            </div>
          </div>
        `;

        cartItemsContainer.innerHTML += itemHTML;
      });

      cartTotal.textContent = total.toFixed(2);
      updateCartCount();
    }

    function updateCartCount() {
      const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
      cartCount.textContent = totalItems;
    }

    // Handle quantity changes
    cartItemsContainer.addEventListener('click', e => {
      if (e.target.classList.contains('increase')) {
        const index = e.target.dataset.index;
        cart[index].quantity++;
      } else if (e.target.classList.contains('decrease')) {
        const index = e.target.dataset.index;
        if (cart[index].quantity > 1) cart[index].quantity--;
      } else if (e.target.classList.contains('remove')) {
        const index = e.target.dataset.index;
        cart.splice(index, 1);
      }
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    });

    // Clear cart
    document.getElementById('clear-cart').addEventListener('click', () => {
      cart = [];
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    });

    // Checkout
    document.getElementById('checkout-btn').addEventListener('click', () => {
      alert('Checkout complete! Thank you for shopping with LABELLA.');
      cart = [];
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    });

    renderCart();
  });
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LABELLA - Where Beauty Lies</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">
            <a href="index.html">LABELLA</a>
            <span>Where Beauty Lies</span>
        </div>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="show.php"><i class="fas fa-store"></i> Shop</a></li>
            <li><a href="login.php" class="cart-link"><i class="fas fa-shopping-cart"></i> Cart (<span id="cart-count">0</span>)</a></li>
            <li><a href="login.php"><i class="fas fa-user"></i> Login</a></li>
        </ul>
        <!-- Menu toggle for small screens -->
        <div class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

     <!-- Shop Header -->
  <header class="shop-header">
    <h1>Shop All Products</h1>
    <select id="categoryFilter">
      <option value="all">All Categories</option>
      <option value="cosmetics">Cosmetics</option>
      <option value="shoes">Shoes</option>
      <option value="bags">Bags</option>
      <option value="lotions">Lotions</option>
      <option value="perfumes">Perfumes</option>
      <option value="fashion_kids">Fashion - Kids</option>
      <option value="fashion_men">Fashion - Men</option>
      <option value="fashion_ladies">Fashion - Ladies</option>
    </select>
  </header>

        <!-- Product Grid (will be filled by AJAX) -->
        <section class="product-grid" id="productGrid"></section>

   
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 LABELLA. All rights reserved. <i class="fas fa-kiss-wink-heart"></i></p>
    </footer>

    <!-- JS Toggle Menu -->
  <script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>

  <!-- JS to filter products (basic setup placeholder) -->
  <script>
    document.getElementById('categoryFilter').addEventListener('change', function () {
      const selected = this.value;
      const products = document.querySelectorAll('.product-card');
      products.forEach(product => {
        if (selected === 'all' || product.dataset.category === selected) {
          product.style.display = 'block';
        } else {
          product.style.display = 'none';
        }
      });
    });
  </script>

<script>
  window.addEventListener('DOMContentLoaded', () => {
    fetch('fetch_products.php')
      .then(res => res.text())
      .then(data => {
        document.getElementById('productGrid').innerHTML = data;

        // AFTER products are inserted, attach event listeners to Add to Cart buttons
        const cartCount = document.getElementById('cart-count');
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        updateCartCount();

        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
          button.addEventListener('click', () => {
            const product = {
              id: button.dataset.id,
              name: button.dataset.name,
              price: parseFloat(button.dataset.price),
              image: button.dataset.image,
              quantity: 1
            };

            const existing = cart.find(item => item.id === product.id);
            if (existing) {
              existing.quantity += 1;
            } else {
              cart.push(product);
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
          });
        });

        function updateCartCount() {
          const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
          cartCount.textContent = totalItems;
        }
      });
  });
</script>

</body>
</html>

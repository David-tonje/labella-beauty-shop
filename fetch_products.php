<?php
require 'db.php';

$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll();

foreach ($products as $product) {
    echo '
    <div class="product-card" data-category="' . htmlspecialchars($product['category']) . '">
        <img src="' . htmlspecialchars($product['image_url']) . '" alt="' . htmlspecialchars($product['name']) . '">
        <h3>' . htmlspecialchars($product['name']) . '</h3>
        <p>' . htmlspecialchars($product['description']) . '</p>
        <span class="price">Ksh ' . htmlspecialchars($product['price']) . '</span>
        <button 
            class="add-to-cart-btn" 
            data-id="' . $product['id'] . '"
            data-name="' . htmlspecialchars($product['name']) . '"
            data-price="' . $product['price'] . '"
            data-image="' . htmlspecialchars($product['image_url']) . '"
        >
            Add to Cart
        </button>
    </div>
    ';
}

?>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'login_required']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $item = [
        'id' => $product_id,
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'qty' => 1
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $found = false;
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item['id'] == $product_id) {
            $cart_item['qty']++;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $_SESSION['cart'][] = $item;
    }

    echo json_encode(['success' => true, 'cartCount' => count($_SESSION['cart'])]);
}

<?php
session_start();

if (isset($_POST['index'], $_POST['action'])) {
    $i = $_POST['index'];
    if ($_POST['action'] == '+') {
        $_SESSION['cart'][$i]['qty']++;
    } elseif ($_POST['action'] == '-' && $_SESSION['cart'][$i]['qty'] > 1) {
        $_SESSION['cart'][$i]['qty']--;
    }
}
header('Location: cart.php');

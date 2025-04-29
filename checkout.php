<?php
session_start();
echo "<h2>Thank you for shopping with LABELLA ❤️</h2>";
unset($_SESSION['cart']);
echo "<p><a href='index.php'>Return to shop</a></p>";

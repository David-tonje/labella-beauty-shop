<?php
session_start();
echo json_encode(['cartCount' => isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0]);

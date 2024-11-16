<?php
include '../config.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menu = $_POST['menu'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO orders (user_id, menu, quantity, total_price) VALUES ('$user_id', '$menu', '$quantity', '$total_price')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../orders-list.php?status=success");
    } else {
        header("Location: ../order.php?status=error");
    }
}

$conn->close();

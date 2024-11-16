<?php
include '../config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;

    // Update query
    if ($password) {
        $sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = '$user_id'";
    } else {
        $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = '$user_id'";
    }

    if ($conn->query($sql)) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header("Location: ../profile.php?status=success");
    } else {
        header("Location: ../edit-profile.php?status=error");
    }
}

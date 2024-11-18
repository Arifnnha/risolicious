<?php
include '../config.php';

session_start();
if (!isset($_SESSION)) {
    die("Session gagal dimulai. Pastikan session sudah diaktifkan.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = $conn->real_escape_string($_POST["username_or_email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username_or_email' OR email = '$username_or_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            echo "Login berhasil!";
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            header("Location: ../index.php");
            exit;
        } else {
            header("Location: ../login.php?wrongPassword");
        }
    } else {
        header("Location: ../register.php?accountNotFound");
    }
}

$conn->close();

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include '../config.php';

$comment = $conn->real_escape_string($_POST['comment']);
$username = $_SESSION['username']; 
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO comments (user_id, username, comment, created_at) VALUES ('$user_id', '$username', '$comment', NOW())";

if ($conn->query($sql)) {
    header("Location: ../index.php#comments");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>

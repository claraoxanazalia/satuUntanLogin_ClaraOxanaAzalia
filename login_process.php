<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $valid_user = "clara";
    $valid_pass = "clara123";

    if ($email === $valid_user && $password === $valid_pass) {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = "Username atau password salah!";
        header("Location: index.php");
        exit;
    }
}
?>

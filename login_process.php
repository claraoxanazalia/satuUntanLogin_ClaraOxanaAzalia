<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {

        $_SESSION['error'] = "Email atau password salah!";
        header("Location: index.php");
        exit;
    }
}
?>

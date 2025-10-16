<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SatuUntan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dashboard-container" style="text-align:center; margin-top:100px;">
        <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['user']); ?> 🎉</h1>
        <p>di <b>Sistem Administrasi Terintegrasi Universitas Tanjungpura</b>.</p>


        <a href="logout.php" 
           style="display:inline-block; margin-top:20px; padding:10px 20px; 
                  background-color:#e63946; color:white; border-radius:8px; text-decoration:none;">
            Logout
        </a>
    </div>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="logged-main">
        <div class="container">
            <!-- Welcomes the user if logged in -->
            <h2>Welcome</h2>
            <p>You are now logged in as <span class="special"><?php echo $_SESSION['username']; ?></span></p>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</body>
</html>

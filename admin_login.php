<?php
    require 'check_admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_login.css">
    <title>Login Admin</title>
</head>
<body>
    <div class="container_login">
        <div class="form-login">
            <h3>Login Admin</h3>
            <hr>
            <form action="" method="post">
                <label for="">Username</label>
                <input type="text" name="user" placeholder="Username" class="input" required>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" class="input" required>
                <input type="submit" name="login" value="Login" class="submit">
                <a href="index.php">
                    <button type="button" class ="button_user">Login Sebagai User</button>
                </a>
            </form>
        </div>
    </div>
</body>
</html>

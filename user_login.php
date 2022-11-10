<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_login.css">
    <title>Login User</title>
</head>
<body>
    <div class="container_login">
        <div class="form-login">
            <h3>Login User</h3>
            <hr>
            <form action="" method="post">
                <label for="">Email atau Username</label>
                <input type="text" name="user" placeholder="Email atau username" class="input" required>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" class="input" required>
                <input type="submit" name="login" value="Login" class="submit">
                <a href="admin_login.php">
                    <button type="button" class ="button_admin">Login Sebagai Admin</button>
                </a>
            </form>
            <p>Don't have an account?
                <a href="register.php" id = "daftar">Register</a>
                <script>
                    const daftar = document.getElementById('daftar');
                    daftar.style.color = 'white';
                </script>
            </p>
        </div>
    </div>
</body>
</html>

<?php
    require 'config.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username ='$user' OR email='$user'";
        $result = $db->query($sql);

        // cek akun ada atau ngga
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            // cek password valid atau ngga
            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = true;

                echo "
                    <script>
                        alert('Selamat Datang $username');
                        document.location.href = 'index.php';
                    </script>";
            }else{
                echo "
                    <script>
                        alert('Username atau Password Salah!');
                    </script>";
            }
        }else{
            echo "
                <script>
                    alert('Username Tidak Terdaftar. Silahkan Registrasi Terlebih Dahulu!');
                </script>";
        }
    }
?>

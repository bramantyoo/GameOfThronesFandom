<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/regis.css">
    <title>Register</title>
</head>
<body>
    <div class="container_regis">        
        <div class="form">
            <h3>Registrasi</h3>
            <hr>
            <form action="" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" class="input" placeholder="Masukkan email" required>

                <label for="username">Username</label>
                <input type="text" name="username" class="input" placeholder="Masukkan username" required>

                <label for="password">Password</label>
                <input type="password" name="password" class="input" placeholder="Password" required><br>

                <label for="konfirmasi">Konfirmasi Password</label>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password" required>

                <input type="submit" name="regis" class="submit" value="Registrasi">
            </form>
            <p>Have an account already?
                <a href="user_login.php" id = "login_user">Log in</a>
                <script>
                    const login_user = document.getElementById('login_user');
                    login_user.style.color = 'white';
                </script>
            </p>
        </div>
    </div>
</body>
</html>

<?php
    
    require 'config.php';

    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        //cek username sudah digunakan atau belum
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo 
            "<script>
                alert('Username Telah Digunakan. Silahkan Gunakan Username Lain!);
            </script>";
        } else {
            //cek konfirmasi password
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO user(email, username, psw)
                        VALUES ('$email','$username','$password')";
                $result = $db->query($query);
                if($result){
                    echo 
                        "<script>
                            alert('Registrasi Berhasil);
                        </script>";
                } else {
                    echo 
                        "<script>
                            alert('Registrasi Gagal);
                        </script>";
                }
            } else {
                echo 
                    "<script>
                        alert('Konfirmasi Password Salah!);
                    </script>";
            }
        }
    }
?>

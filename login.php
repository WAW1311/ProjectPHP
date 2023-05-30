<?php
require 'koneksi.php';
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM Data_user WHERE username ='$username'");

    if($result && mysqli_num_rows($result)=== 1 ) {

        $row = mysqli_fetch_assoc($result);
        if ($password==$row["password"]) {

          $_SESSION["login"]= true;
            echo header('location: index.php');
            exit;
        }
    }
    $eror = true;
}
if(isset($_POST["signup"])) {
  header("location: register.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Login</title>
        <style>
            body {
                margin: 0;
                padding: 0;
            }
            .bg_login {
                margin-top: -10px;
                background-image: url(assets/ImageHeroLogin.jpg);
                background-size: cover;
                width: 100%;
                height: 480px;
                padding-top: 170px;
            }
            .form {
                margin-left: 540px;
                padding-top: 60px;
                text-align: center;
                width: 300px;
                height: 300px;
                box-sizing: border-box;
                background: rgb(62, 144, 141);
                color: black;
                border-radius: 10px;
            }
            .form-username {
                width: 275px;
                height: 25px;
                margin-bottom: 10px;
                margin-left: -2px;
            }
            .form-password {
                width: 275px;
                margin-left: -2px;
                height: 25px;
                margin-bottom: 10px;
            }
            .button_login {
                margin-bottom:10px;
            }
            .sambutan {
                margin-top: -150px;
                color: white;
                text-align: center;
                font-size: 30px;
            }
            @media screen and (max-width: 768px) {
                .sambutan {
                    font-size: 25px;
                    margin-top: -180px;
                }
                .form {
                    margin-left: 215px;
                }
            }
            @media screen and (max-width: 576px) {
                .bg_login {
                    height: 600px;
                }
                .sambutan {
                    margin-top: -140px;
                    font-size: 20px;
                }
                .form {
                    margin-left: 50px;
                    margin-top: 0px;
                }
            }
        </style>
  </head>
  <body>
    <section>
      <div class="bg_login">
        <div class="sambutan">
            <h1>SELAMAT DATANG DI WEBSITE CIPTA KARYA</h2>
            <h2>Silahkan login terlebih dahulu</h2>
        </div>
        <div class="form">
          <form action="" method="post">
            <label>Username:</label><br />
            <input class="form-username" type="text" name="username" placeholder="Masukan username..." /><br />
            <label>Password:</label><br />
            <input class="form-password" type="password" name="password" placeholder="Masukan password..." /><br />
            <input class="button_login" type="submit" name="login" value="login" />
            <div class="signup">
              <label>Belum punya akun?</label>
              <input type="submit" name="signup" value="Buat akun" />
            </div>
          </form>
          <?php if(isset($eror)): ?>
            <p style="color: red; font-style: italic;">Username atau password tidak ditemukan!</p>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </body>
</html>
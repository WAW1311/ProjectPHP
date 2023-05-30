<?php
include 'koneksi.php';
if(isset($_POST["submit"])) {
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $email = $_POST['email'];

  $result = mysqli_query($conn, "SELECT * FROM Data_user WHERE username ='$username'");

  if ($password2 !==$password) {
       $eror=true;
  }
  else if(mysqli_num_rows($result)>0 ){
    $eror2 = true;
  }else{

  $sql = "INSERT INTO Data_user (fullname, username, password , email) VALUES ('$fullname', '$username', '$password', '$email')";
  if (mysqli_query($conn, $sql)) {
      echo "<script> alert('Registrasi berhasil') </script>";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
}
if(isset($_POST["login"])) {
  header("location: login.php");
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
                font-family: sans-serif;
                margin-top: -60px;
                margin-left: 450px;
                padding-top: 5px;
                padding-left: 20px;
                width: 500px;
                height: 500px;
                box-sizing: border-box;
                background: white;
                color: black;
                border-radius: 10px;
            }
            .form-username {
                width: 275px;
                margin-left: 71px;
                height: 25px;
                margin-bottom: 30px;
            }

            .form-password {
                width: 275px;
                margin-left: 75px;
                height: 25px;
                margin-bottom: 30px;
            }
            .form-fullname {
                width: 275px;
                height: 25px;
                margin-left:40px;
                margin-bottom: 30px;
            }
            .form-password2 {
                width: 275px;
                height: 25px;
                margin-left: -3px;
            }
            .form-email {
                width: 275px;
                height: 25px;
                margin-left: 105px;
                margin-top: 25px;
                margin-bottom: 30px;
            }
            .button_signup {
                margin-bottom:30px;
                margin-left: 155px;
            }
            .tittle_form {
                text-align: center;
            }
            @media screen and (max-width: 768px) {
                .form {
                    margin-left: 125px;
                    margin-top: -80px;
                }
            }
            @media screen and (max-width: 576px) {
                .bg_login {
                    height: 600px;
                }
                .form {
                    margin-left: 0px;
                    margin-top: -80px;
                    width: 412px;
                    height: 500px;
                    padding-left: 0px;
                }
                .form-username {
                    margin-left: 29px;
                }
                .form-fullname {
                    margin-left: 0px;
                }
                .form-password {
                    margin-left: 33px;
                }
                .form-password2 {
                    margin-left: 0px;
                    width: 225px;
                }
                .form-email {
                    margin-left: 65px;
                }
            }
        </style>
  </head>
  <body>
    <section>
      <div class="bg_login">
        <div class="form">
          <div class="tittle_form">
            <h1>REGISTRASI</h1>
          </div>
          <?php if(isset($eror2)): ?>
            <p style="color: red; font-style: italic;">Username sudah dipakai!</p>
          <?php endif; ?>
          <form action="" method="post">
          <label>Nama lengkap:</label>
            <input class="form-fullname" type="text" name="fullname" placeholder="Masukan nama lengkap..." /><br />
            <label>Username:</label>
            <input class="form-username" type="text" name="username" placeholder="Masukan username..." /><br />
            <label>Password:</label>
            <input class="form-password" type="password" name="password" placeholder="Masukan password..." /><br />
            <label>Konfirmasi password:</label>
            <input class="form-password2" type="password" name="password2" placeholder="Masukan ulang password..." /><br />
            <?php if(isset($eror)): ?>
              <p style="color: red; font-style: italic; text-align: right; margin:0;">Konfirmasi password salah!</p>
            <?php endif; ?>
            <label>Email:</label>
            <input class="form-email" type="text" name="email" placeholder="Masukan email..." /><br />
            <input class="button_signup" type="submit" name="submit" value="Buat akun" /></br>
            <label>Sudah punya akun?</label>
            <input class="button_login" type="submit" name="login" value="Login" />
          </form>
        </div>
      </div>
    </section>
  </body>
</html>

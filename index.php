<?php
session_start();
if(!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="" />
    <title>CIPTA KARYA</title>
  </head>
  <body>
    <nav>
      <div class="logo">
          <h4>Cipta Karya</h4>
      </div>
      <ul class="">
          <li><a href="#home">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#product">Produk</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
      <div class="menu-toggle">
          <input type="checkbox"/>
          <span></span>
          <span></span>
          <span></span>
      </div>
  </nav>
    <div class="parallax-container" id="home">
        <div class="container">
            <div class="deskripsi"> 
                <h1>Belanja Bersama Kami</h1>
                <h3>Perusahaan kami adalah salah satu perusahaan<br>yang bergerak dibidang produksi busana yang<br>banyak diminati oleh banyak kalangan</h1>
                <a href="#product"><h4>SHOPE NOW</h4></a>
            </div>
        </div>
    </div> 
    <div id="about"></div>
    <div class="container-about">
      <section>
        <div class="tentang">
          <h2>PRODUK YANG MENGAGUMKAN</h2>
          <h1>Tentang Perusahaan Kami</h1>
        </div>
        <div class="about">
          <img src="assets/foto keadaan konveksi.jpg" width="550" height="400" />
          <h3>
            Perusahaan Cipta Karya Garmendo yang bergerak<br />dibidang garment, konveksi yang memproduksi berbagai<br />macam kaos, kemeja, rompi, jaket, Masker, dan lainnya<br />Yang ditujukan untuk kebutuhan, perusahaan, komunitas.<br />Kami
            Menyediakan Jasa Pembuatan Seragam kantor<br />sekolah, baju kerja, pakaian dinas PNS, PDH, PDL, ASN, dll<br />untuk Pria Wanita, Anak-Anak dan Dewasa.
          </h3>
        </div>
      </section>
    </div>
    <br>
    <div class="container-product">
      <div class="container-produk" id="product"></div>
      <section>
        <div class="produk">
          <h2>PRODUK POPULER</h2>
          <h1>Produk Kami</h1>
          <h3>Produk yang kami produksi adalah produk yang sesuai<br />keinginan klien. Kami memproduksi produk secara<br />massal, sehingga produk kami dapat cepat diterima oleh klien.</h3>
        </div>
        <div class="baris1">
          <img src="assets/baju.jpg" width="450" height="300" />
          <img src="assets/kemeja.jpg" width="450" height="300" />
        </div>
        <div class="fontbaris1">
          <h1>Kaos Polos</h1>
          <h2>Kemeja</h2>
        </div>
        <div class="icon1">
          <i class="large material-icons fav1">favorite</i>
          <i class="large material-icons star1">star</i>
          <i class="large material-icons fav2">favorite</i>
          <i class="large material-icons star2">star</i>
        </div>
        <div class="paraf">
          <p class="iu1">+99</p>
          <p class="iu2">5.0</p>
          <p class="iu3">+99</p>
          <p class="iu4">5.0</p>
        </div>
        <div class="button">
          <button class="button1"><a href="order_now/form.html" target="_blank">Pre order now</a></button>
          <button class="button2"><a href="order_now/form.html" target="_blank">Pre order now</a></button>
        </div>
        <div class="baris2">
          <img src="assets/celana.jpg" width="450" height="300" />
          <img src="assets/jas.jpg" width="450" height="300" />
        </div>
        <div class="fontbaris2">
          <h1>Celana</h1>
          <h2>Jas</h2>
        </div>
        <div class="icon1">
          <i class="large material-icons fav1">favorite</i>
          <i class="large material-icons star1">star</i>
          <i class="large material-icons fav2">favorite</i>
          <i class="large material-icons star2">star</i>
        </div>
        <div class="paraf">
          <p class="iu1">+99</p>
          <p class="iu2">5.0</p>
          <p class="iu3">+99</p>
          <p class="iu4">5.0</p>
        </div>
        <div class="button">
          <button class="button1"><a href="order_now/form.html" target="_blank">Pre order now</a></button>
          <button class="button2"><a href="order_now/form.html" target="_blank">Pre order now</a></button>
        </div>
        <div class="baris3">
          <img src="assets/seragam.jpg" width="450" height="300" />
          <img src="assets/dinas.jpg" width="450" height="300" />
        </div>
        <div class="fontbaris3">
          <h1>Seragam</h1>
          <h2>Baju Dinas</h2>
        </div>
        <div class="icon1">
          <i class="large material-icons fav1">favorite</i>
          <i class="large material-icons star1">star</i>
          <i class="large material-icons fav2">favorite</i>
          <i class="large material-icons star2">star</i>
        </div>
        <div class="paraf">
          <p class="iu1">+99</p>
          <p class="iu2">5.0</p>
          <p class="iu3">+99</p>
          <p class="iu4">5.0</p>
        </div>
        <div class="button">
          <button class="button1"><a href="order_now/form.html" target="_blank">Pre order now</a></button>
          <button class="button2"><a href="order_now/form.html" target="_blank">Pre order now</a></button>
        </div>
      </section>
    </div>
    <div class="kontak" id="contact"></div>
    <div class="container-contact">
      <h2>FORUM KONTAK</h2>
      <h1>HUBUNGI KAMI</h1>
      <section>
        <div class="form">
          <form action="php/form.php" method="post">
            <label>Nama Lengkap:</label><br />
            <input class="form-nama" type="text" name="name" placeholder="Nama Anda..." /><br />
            <label>Email:</label><br />
            <input class="form-email" type="text" name="email" placeholder="Email Anda..." /><br />
            <label>Message:</label><br />
            <textarea class="form-message" name="message" placeholder="Pertanyaan atau pemesanan..."></textarea><br />
            <input type="submit" name="submit" value="kirim" />
          </form>
        </div>
      </section>
    </div>
    <div class="end">
      <div class="alamat">
        <h1>ALAMAT</h1>
        <h2>Dusun Pamutih, Kecamatan Ulujami,<br />Kabupaten Pemalang,<br />Jawa Tengah 52371 <br />+62 856-9780-7743</h2>
      </div>
      <div class="icon" id="contact">
        <a class="tombol" href="https://www.facebook.com/wahyushu.frogstonesoekamti"><i class="fab fa-facebook-f"></i></a>
        <a class="tombol" href="https://wa.me/+6281226564887"><i class="fab fa-whatsapp"></i></a>
        <a class="tombol" href="https://www.instagram.com/w.a.w1311/"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="copyright">
    <section>
        <center><small>Copyright © 2023 All rights reserved</small></center>
    </section>
    </div>
    <script src="js/class.js"></script>
  </body>
</html>

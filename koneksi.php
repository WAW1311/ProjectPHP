<?php
$servername = "sql312.epizy.com";
$user = "epiz_34215373";
$pass = "ItQVALRM5TkV";
$dbname = "epiz_34215373_ciptakarya";

$conn = mysqli_connect($servername, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $barang = $_POST['barang'];
    $email = $_POST['email'];
    $message = $_POST['message']; 
    $to = 'wahyuandrewibowo311@gmail.com';
    $subject = "Pesanan " . $barang;
    $message = "Name: " . $name . "\n" . "Pembelian: " . $barang. "\n" . "Email: " . $email . "\n" . "Detail Pesanan: " . $message;
    $headers = "From: " . $email;
    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Thank you For Buying"." ".$name.", We will contact you shortly!</h1>";
    }
    else{
        echo "Something went wrong!";
    }
}
?>
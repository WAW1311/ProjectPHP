<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'wahyuandrewibowo311@gmail.com'; 
    $subject = 'Dari Pengunjung Website';
    $message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;
    $headers = "From: " . $email;
    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        
    }else{
        echo "Something went wrong!";
    }
}
?>
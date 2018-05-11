<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "odev";
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // bağlantı özelliklerinden hata modunu aktifleştirdik
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
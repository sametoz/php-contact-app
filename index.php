<?php
include 'operation.php';

?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <script src="script.js"></script>
    <body>
            <form action="" method="POST">
            <p> 
            Ad:         <input type="text" name="ad"/><br>
            Soyad:      <input type="text" name="soyad"/><br>
            Adres:      <input type="text" name="adres"/><br>
            Tur:        <input type="text" name="tur"/><br>
            <input type="submit" name="insert" value="ekle"/>
            <input type="submit" name="sil" value="sil"/>
            <input type="submit" name="sil" value="coklusil"/>
            <input type="submit" name="update" value="güncelle"/>
            </p>
            </form>

            <table border="1" id="tablo">
            <tr>
                <td>Id</td>
                <td>----Ad----</td>
                <td>----Soyad----</td>
                <td>----Telefon----</td>
                <td>----Tür----</td>
            </tr>
            <tr id="satir">
            </tr>
            </table>
            <button type="button" name="samet" id="buton" value="samet">aaaa</button>
            
        </body>
</html>
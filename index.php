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
            Ad:    <input type="text" name="ad"/>
            Soyad: <input type="text" name="soyad"/>
            Adres:<input type="text" name="adres"/>
            Tur: <input type="text" name="tur"/>
            <input type="submit" name="insert" value="insert"/>
            <input type="submit" name="sil" value="sil"/>
            <input type="submit" name="update" value="update"/>
            </p>
            </form>

            <table border="1" id="tablo">
            <tr>
                <td>Ad </td>
                <td>Soyad</td>
                <td>Telefon</td>
                <td>Tür</td>
            </tr>
            <tr id="satir">
            </tr>
            </table>
            <button type="button" name="samet" id="buton" value="samet">aaaa</button>
        </body>
</html>
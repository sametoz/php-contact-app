<?php
include 'db.php';

$ad = isset($_POST['ad']) ? $_POST['ad'] : '';
$soyad = isset($_POST['soyad']) ? $_POST['soyad'] : '';
$adres = isset($_POST['adres']) ? $_POST['adres'] : '';
$tur = isset($_POST['tur']) ? $_POST['tur'] : '';
$id=isset($_POST['tur']) ? $_POST['tur'] : '';



if(isset($_POST["insert"])){
    

    try { 
        $sql = "INSERT INTO `kisiler` (`ad`, `soyad`, `adres`, `tur`) VALUES ('$ad', '$soyad', '$adres', '$tur')";    
        $conn->exec($sql);
        
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

    $conn = null;
    header("location: index.php");
    exit;
    }

if(isset($_POST["sil"])){
    
    try {
        $sql = "DELETE FROM kisiler WHERE id=18";            
        $conn->exec($sql);  
       
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
        header("location: index.php");
    exit;
    }
    
    if(isset($_POST["coklusil"])){
    
        try {
            
            $silinecekler = implode(', ', $_POST['cb']);
            $sql="DELETE FROM kisiler WHERE id IN ( ' . $silinecekler . ' )";
            $conn->exec($sql); 
            
               
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
            header("location: index.php");
        exit;
        }
     

if(isset($_POST["update"])){
    
    
    try {
        $sql = "UPDATE `kisiler`   
        SET `ad` = '$ad',
            `soyad` = '$soyad',
            `adres` = '$adres',
            `tur` = '$tur' 
      WHERE `Id` = 40";            
        $conn->exec($sql);  
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
        header("location: index.php");
    exit;
    }
    
    ?>



 
 

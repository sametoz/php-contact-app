<?php
require 'db.php';
header('Content-type: text/html; charset=UTF-8');

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //select işlemi
        
        
        $select  = $conn->query("SELECT * FROM kisiler");
        $donen= $select->fetchAll(PDO::FETCH_ASSOC);
        $conn=null;  
        echo json_encode($donen);
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
?>
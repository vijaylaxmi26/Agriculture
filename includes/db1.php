<?php 


   $dsn= "mysql:host=localhost;dbname=agriuser";
try{
    $pdo = new PDO($dsn, 'root','');

}catch(PDOException $e){
    echo $e->getMessage();
}

?>
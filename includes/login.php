<?php
session_start();
require('db1.php');

if(isset($_POST['login'])) {
    $user_email = $_POST['login-email'];
    $user_pass = $_POST['login-password'];

    
    
    // checking from the database
    $sql = "SELECT * from `invester` WHERE `inv_email` = :email AND `inv_pass` = :pass";
    $stmt = $pdo->prepare($sql);
    if($stmt){
        $stmt->bindParam(':email',$user_email);
        $stmt->bindParam(':pass',$user_pass);
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        $id= $data['inv_id']; 
        if($stmt->rowCount()!=0){
            $_SESSION['user'] = "yes";
            $_SESSION['userid']=$id;
            header('location: ../index.php');
            exit();
        }
        else {
            echo "<h1>User Does Not exsist</h1>";
        }
        
    }
    else
    {
        echo "error";
    }
    
    
    
}
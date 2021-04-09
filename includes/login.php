<?php

if(isset($_POST['login'])){
    $lemail=$_POST['email'];
    $lpass=$_POST['password'];

    require_once 'db.php';
    require_once 'functions.php';

    $emailExists = emailExists($conn,$lemail);

    if($emailExists == false) {
        header("location: ../index.php?error=wrongloginemail");
        exit();
    }

    $pwdHashed = $emailExists["pass"];
    
    $checkPwd = password_verify($lpass,$pwdHashed);

    if($checkPwd == false) {
        header("location: ../index.php?error=wrongloginpass");
        exit();
    }
    else if ($checkPwd == true) {
        session_start();
        $_SESSION['sno'] = $emailExists['sno'];
        $_SESSION['username'] = $emailExists['username'];
        header("location: ../index.php");
        exit();
    }
}




?>
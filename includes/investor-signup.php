<?php

    include('db1.php');

    if(isset($_POST['investor-submit'])){
        $investor_name = $_POST['investor-fullname'];
        $investor_address = $_POST['investor-address'];
        $investor_email = $_POST['investor-email'];
        $investor_phone = $_POST['investor-phone'];
        $investor_pass = $_POST['investor-password'];
        $investor_cpass = $_POST['investor-cpassword'];

        // check for the email
        $sql = "SELECT * from invester where inv_email = '$investor_email'";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
        if(!$stmt){
            echo "Server Error";
        }
        if($stmt->rowCount()!=0){
            header('location: ../pages/signup-page.php?error=checkemail');
            exit();
        }

        // check for password
        if($investor_pass != $investor_cpass){
            header('location: ../pages/signup-page.php?error=passwrong');
            exit();
        }

        // inserting the query
        $sql = "INSERT INTO invester(inv_name, inv_email, inv_phone, inv_address, inv_pass) VALUES ('$investor_name','$investor_email','$investor_phone','$investor_address','$investor_pass')";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
        if(!$stmt){
            echo "error is connection";
        }
        
        header('location: ../pages/signup-page.php?error=none');
        exit();
    }
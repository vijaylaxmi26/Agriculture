<?php include('db1.php');

if(!$pdo){
    echo "Error";
}

if(isset($_POST['farmer-submit']))
{
    $farmer_first_name = $_POST['farmer-firstname'];
    $farmer_last_name = $_POST['farmer-lastname'];
    $farmer_land = $_POST['farmer-land'];
    $farmer_address = $_POST['farmer-address'];
    $farmer_email = $_POST['farmer-email'];
    $farmer_phone = $_POST['farmer-phone'];
    $farmer_pass = $_POST['farmer-password'];
    $farmer_cpass = $_POST['farmer-cpassword'];
    
    // image system
    $target ="images/".basename($_FILES['land-image']['name']);
    
    $image = $_FILES['land-image']['name'];
   
     // confirm password
     if($farmer_cpass != $farmer_pass){
        header('location: ../pages/farmer-register.php?error=passwrong');
        exit();
    }
    
    // check email address
    $sql = "SELECT * from farmer where faremail = '$farmer_email'";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    if(!$stmt){
        echo "Server Error";
    }
    if($stmt->rowCount()!=0){
        header('location: ../pages/farmer-register.php?error=checkemail');
        exit();
    }
    
    // insert operation -> error is coming over here
    $sql = "INSERT INTO farmer (farfirname, farlasname, faremail, farphone, farland, farpass, farimgland, faraddr) VALUES ('$farmer_first_name','$farmer_last_name','$farmer_email','$farmer_phone','$farmer_land','$farmer_pass','$image','$farmer_address')";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
 

    if(copy($_FILES['land-image']['tmp_name'], $target)) 
    {
        echo "success";  
    } 
    else 
    {
        echo 'image succesfully uploaded!';
        
    } 
   

    header('location: ../pages/farmer-register.php?error=none');
    exit();
}

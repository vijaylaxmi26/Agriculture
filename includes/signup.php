<?php 

if(isset($_POST['ssubmit']))
{
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $passsword=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    include 'db.php';
    include 'functions.php';

    if(invalidUid($firstName) != false) {
        header("location: ../index.php?error=invaliduser");
        exit();
    }

    if(invalidPhone($phone) != false) {
        header("location: ../index.php?error=invalidphone");
        exit();
    }

    if(password_verify($passsword, $cpassword) && $password !=null) {
        header("location: ../index.php?error=incorrectpass");
        exit();
    }

    if(emailExists($conn,$email) == false) {
        header("location: ../index.php?error=emailTaken");
        exit();
    }

    // $query="INSERT INTO users(firstName, lastName, email, phoneNo, pass) VALUES (?,?,?,?,?)";
    // $stmt = mysqli_stmt_init($conn);
    
    // if(!mysqli_stmt_prepare($stmt, $query) || mysqli_stmt_prepare($stmt, $query)) {
    //     header("location: ../index.php?error=createfailed");
    //     exit();
    // }
    
    // $pass = password_hash($password, PASSWORD_DEFAULT);
     
    // mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $phone, $pass);
    
    // mysqli_stmt_execute($stmt);
    
    // mysqli_stmt_close($stmt);
    
    header("location: ../index.php?error=none");
    exit();
}
else {
    echo "PRoblem";
}
?>
<?php  require_once("./../includes/db1.php"); ?>

<?php

if(isset($_POST['ssubmit']))
{
    $investorid = $_POST['investerid'];
    $farmid = $_POST['farmerid'];
    $crop = $_POST['crop'];
    $quantity = $_POST['quantity'];
    $period = $_POST['year'];
    $invest = $_POST['invest'];

    $vkey = md5(time().$investorid);
    
    $sql3 = "select faremail from `farmer` where farid = $farmid";
    $stmt= $pdo->prepare($sql3);
    $stmt->execute();
    $femail=$stmt->fetch(PDO::FETCH_ASSOC);
    $to= $femail['faremail']; 
    
    
    
    $headers="From: codervk2000@gmail.com \r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $prehash=0;
    $hash=0;

    $sql = "select count(*) from `smart-contract`";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetch(PDO::FETCH_ASSOC);
    $rownum= $rows['count(*)'];

    if($rownum>0){
        $sql2 = "select * from `smart-contract` where contract_id= (select max(contract_id) from `smart-contract`)";
        $stmt= $pdo->prepare($sql2);
        $stmt->execute();
        $block=$stmt->fetch(PDO::FETCH_ASSOC);
        $prehash= $block['hash'];      
    }  

    $contrat = "investor $investorid gave farming contract to farmer $farmid for the crop $crop 
    and quantity $quantity over a period of $period years investing $invest Rupees in it and previous block $prehash";
    
    $hash=hash('md5',$contrat);

    $sql1 ="INSERT INTO `smart-contract`(`far_id` ,`invt_id` ,`farmcrop`, `period` ,amount ,investment ,pre_hash ,hash,vkey ) VALUES('$farmid', '$investorid','$crop', '$period', '$quantity', '$invest', '$prehash', '$hash','$vkey')";

    $stmt =$pdo->prepare($sql1);
    $result= $stmt->execute();

    if($result){
       $subject="Contract verification";
       $sql4 = "select * from `invester` where inv_id = $investorid";
       $stmt= $pdo->prepare($sql4);
       $stmt->execute();
       $details=$stmt->fetch(PDO::FETCH_ASSOC);
       $iname = $details['inv_name'];
       $iphone = $details['inv_phone'];

       $message= "Hi $iname,</br>

       Invester $iname is interested in signing a farming contract with you. They currently need the supply of $crop.</br>
       Other details are</br>
       Crop Name - $crop</br>
       Quantity -$quantity</br>
       Period - $period</br>
       They are ready to invest $invest rupees in it</br>
       If interested, you can contact the investor by using the following details</br>
       
       $iname - $iphone</br>
       <a href='http://localhost/amoc/Agriculture/includes/verify.php?vkey=$vkey'>verify details</a>";
       $sentmail=mail($to,$subject,$message,$headers);
       if($sentmail){
       header("location: ../index.php?error=none");
       exit();
       }
   

    }else{
        header("http://localhost/amoc/Agriculture/includes/verify.php");
        exit();
    }

    

}

?>
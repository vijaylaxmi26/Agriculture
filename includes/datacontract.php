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

    $sql1 ="INSERT INTO `smart-contract`(far_id ,invt_id ,`farmcrop`, `period` ,amount ,investment ,pre_hash ,hash ) VALUES($farmid, $investorid,'$crop', '$period', '$quantity', '$invest', '$prehash', '$hash')";

    $stmt =$pdo->prepare($sql1);
    $stmt->execute();

    header("location: ../index.php?error=none");
    exit();


}

?>
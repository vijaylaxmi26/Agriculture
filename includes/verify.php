<?php  require_once("./../includes/db1.php"); ?>

<?php
if(isset($_GET['vkey'])){
    $vkey = $_GET['vkey'];

    $sql = "select verified,vkey from `smart-contract` where verified = 0 and vkey= $vkey";
    $stmt= $pdo->prepare($sql);
    $resultSet=$stmt->execute();
    if($resultSet->num_rows==1){
        $sql1 = "update `smart-contract` set verified=1 where vkey= $vkey";
        $stmt= $pdo->prepare($sql1);
         $stmt->execute();
         echo "succes";
    }

}

?>
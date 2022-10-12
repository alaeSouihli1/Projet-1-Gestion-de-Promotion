<?php 
 include 'business/management.php';
 $gestPromo=new management();

    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $gestPromo->SupprimerPromotions($id);
        header("location: index.php");

    }
?>

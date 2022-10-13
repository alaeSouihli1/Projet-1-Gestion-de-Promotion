<?php 
 include 'business/promotionBLL.php';
 $gestPromo=new promotionBLL();

    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $gestPromo->SupprimerPromotions($id);
        header("location: index.php");

    }
?>

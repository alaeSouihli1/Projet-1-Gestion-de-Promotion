<?php
include 'connection.php';
include 'promotion.php'; 
class promotionM{
    public function Afficher(){
        $req="SELECT * from promotion";
        $res=mysqli_query(getConnection(),$req);
        $promotions=mysqli_fetch_all($res,MYSQLI_ASSOC);

        $promotion_Data=array();
        foreach($promotions as $promoValue){
            $promotion=new promotion();
            $promotion->setId($promoValue['id']);
            $promotion->setName($promoValue['Name']);
            array_push($promotion_Data ,$promotion);
        }
        return $promotion_Data;


    }

    public function Ajouter($promotion){
        $Name=$promotion->getName();
        $req="INSERT INTO promotion (`name`) values ('$Name') ";
        mysqli_query(getConnection(),$req);

    }

  
}
?>
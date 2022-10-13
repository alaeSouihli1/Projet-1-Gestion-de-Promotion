<?php
include 'connection.php';
include 'promotion.php'; 

class promotionDAL extends Connection{
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

    public function Supprimer($id){

        $req="DELETE FROM promotion WHERE id=$id";
        mysqli_query(getConnection(),$req);

    }

    public function Modifier($id,$Name){

        
        $req="UPDATE promotion SET name='$Name' WHERE id=$id";
        mysqli_query(getConnection(),$req);

    }

    public function getOne($id){
        $req="SELECT * FROM promotion WHERE id=$id";
        $res=mysqli_query(getConnection(),$req);
        $data=mysqli_fetch_all($res,MYSQLI_ASSOC);

        foreach($data as $value){
            $promotion=new promotion();
            $promotion->setName($value['Name']);
            $promotion->setId($value['id']);

        }
        return $promotion;
        


    }

  
}
?>
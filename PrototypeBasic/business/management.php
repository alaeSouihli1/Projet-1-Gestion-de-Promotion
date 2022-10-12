<?php
include ('DataBase/promotionM.php');
class Management{
    public function __construct(){
        $promotionM=new promotionM();
    }
    public function AfficherPromotions(){
        return $this->promotionM->Afficher();
    }
    public function AjouterPromotions(){
        return $this->promotionM->Ajouter($promotion);
    }

}
?>
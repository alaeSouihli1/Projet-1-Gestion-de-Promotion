<?php
include ('DataAccess/promotionDAL.php');
class promotionBLL{
    private $promotionM=NULL;

    public function __construct(){
        $this->promotionM=new promotionDAL();
    }

    public function AfficherPromotions(){
        return $this->promotionM->Afficher();
    }
    
    public function AjouterPromotions(){
        return $this->promotionM->Ajouter($promotion);
    }

}
?>
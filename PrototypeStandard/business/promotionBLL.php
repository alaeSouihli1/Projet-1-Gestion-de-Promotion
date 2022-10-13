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
    public function SupprimerPromotions($id){
        return $this->promotionM->Supprimer($id);
    }

    public function ModifierPromotions($id,$Name){
        return $this->promotionM->Modifier($id,$Name);

    }

    public function getOnePromotion($id){
        return $this->promotionM->getOne($id);
    }
}
?>
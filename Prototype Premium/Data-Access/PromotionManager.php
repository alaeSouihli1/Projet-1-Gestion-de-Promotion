<?php 

include 'promotion.php';
include 'ConnectionDB.php';

class PromoManager {

public function GetData(){

    $selectRow = "SELECT * from promotion";
    $Query = mysqli_query(GetConnection(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
    $array= array();
    foreach ($GetData as $value){
        $promo = new Promotion();
        $promo->SetId($value['id']);
        $promo->SetName($value['Name']);
        array_push($array,$promo);
    }
    
    return $array ;
}

public function Add($Promo){

$Name =$Promo->getName();

$insertRow="INSERT INTO promotion(`Name`)
VALUES('$Name')";

mysqli_query(GetConnection(),$insertRow);

}

public function Delete($id){
    $DeleteRow = "DELETE  FROM promotion where id = $id";
    mysqli_query(getConnection(),$DeleteRow);


}
function Getpromotion($id){
    $SelectRowId = "SELECT * FROM promotion WHERE id=$id";
    $Query = mysqli_query(GetConnection(),$SelectRowId);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
   
    foreach ($GetData as $value){
    $promo = new Promotion();
    $promo->SetId($value['id']);
    $promo->SetName($value['Name']);
   
    }
    
    return $promo ;
}

public function EditData($id,$name) {
    // Requête SQL
    $RowUpdate = "UPDATE promotion SET 
    `Name`='$name'
    WHERE id=$id";

    mysqli_query(getConnection(),$RowUpdate);

}
}





?>
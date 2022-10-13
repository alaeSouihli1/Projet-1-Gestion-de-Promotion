<?php
include "business/promotionBLL.php";
$gestPromo=new promotionBLL();
if(isset($_GET['id'])){
    // $promotion=new promotion();
    // $id=$_GET['id'];
    $promo=$gestPromo->getOnePromotion($_GET['id']);
}
if(!empty($_POST)){
    // $promotion=new promotion();
    $nom=$_POST['name'];
    $idd=$_POST['id'];
    $gestPromo->ModifierPromotions($idd,$nom);
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="name" value=<?php echo $promo->getName()?> >
    <input type="hidden" name="id" value=<?php echo $promo->getId()?> >
    <button>update</button>
    </form>
</body>
</html>
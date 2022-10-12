<?php
include ("business/management.php");
$gestPromo=new promotionM();
if(!empty($_POST)){
    $promotion=new promotion();
    $promotion->setName($_POST['name']);
    $gestPromo->Ajouter($promotion);

}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
</head>
<body>
     
<form method="Post" >
        <label >Nom de la promotion</label>
        <input type="text" id="nom" name="name">
        <button type="submit">ajouter</button>
    </form>
</body>
</html>
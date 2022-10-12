<?php
include 'business/management.php';
$gestPromo=new promotionM();
$data=$gestPromo->Afficher();

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
    <a href="Ajouter.php">Ajouter promo</a>
    <tr>
        <th>Promotion</th>
        <th>id</th>
    </tr>
    <?php foreach($data as $value) {?>
    <tr>
        <td><? $value['name']?></td>
        <td><? $value['id']?></td>
    </tr>
    <?php
    }
    ?>
</body>
</html>
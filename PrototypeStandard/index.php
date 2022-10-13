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
    <table>
        <thead>
    <tr>
        <th>Promotion</th>
        <th>id</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($data as $value) {?>
    <tr>
        <td><?= $value->getName() ?></td>
        <td><?= $value->getId()?></td>
        <td><a href="supprimer.php?id=<?php echo $value->getId()?>"> Supprimer</a></td>
        <td><a href="modifier.php?id=<?php echo $value->getId()?>">Modifier</a></td>
    </tr>
    
    </tbody>
    <?php
    }
    ?>
</table>
</body>
</html>
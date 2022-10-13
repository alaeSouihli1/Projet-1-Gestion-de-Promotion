<?php
include 'business/promotionBLL.php';
$gestPromo=new promotionDAL();
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#search_input').keyup(function(){
        var input =$(this).val();
        if(input !=' '){
          $.ajax({
            url:"DataBase/fetch.php",
            method:"POST",
            data:{input:input},
            success:function (data){
              $('#show').html(data);
            }
          });
         
        }

      });
});
</script> -->




<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#search_input').keyup(function(){
      var input = $(this).val();
      // alert(input);

      if (input !=' ') {
        $.ajax({
          url:"DataAccess/fetch.php",
          method:"POST",
          data:{key:input},
          success:function (data){
            $('#show').html(data);
          }
        });
        
      }
     
    });
  });
</script>
  <form action="" method="POST">
    <input type="text"  id="search_input" name="input">
    </form>

    <a href="Ajouter.php">Ajouter promo</a>

    <table>
        <thead>
    <tr>
          <th>id</th>
        <th>Promotion</th>
       
    </tr>
    </thead>
    <?php foreach($data as $value) {?>
      <tbody id="show">
        <tr>
            <td><?= $value->getId()?></td>
            <td><?= $value->getName() ?></td>
            
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
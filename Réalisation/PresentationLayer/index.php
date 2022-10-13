<?php 

// include 'Data_Acess/PromoManager.php';
include "../Business/PromotionBLL.php";
$PromoManager = new PromoBLL();
$GetData =  $PromoManager->GetAllData();





?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function(){
      var input = $(this).val();
      // alert(input);

      if (input !=' ') {
        $.ajax({
          url:"../Data-Access/Search.php",
          method:"POST",
          data:{key:input},
          success:function (data){
            $('#showS').html(data);
          }
        });
        
      }
     
    });
  });
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <section id="section">
    <div id="container">
    <form action="" method="POST" id="form">
      <h3>Gestion de Promotion</h3>
      <input type="text" id="search" name="input" placeholder="Chercher promotion...">
      <a href="Ajouter.php" id="ajouter">Ajouter promotion </a>
    </form>
    <div class="scrollbar">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">functions</th>

        </tr>
      </thead>
      
      <tbody id="showS">
        <tr>
            <?php 
            foreach($GetData as $value){
              
          
            ?>
          <td> <?php echo $value->GetId() ?></td>
          <td> <?php echo $value->getName() ?></td>
          <td>
            <a href="Delete.php?id=<?php echo $value->getId() ?>" class="linkD"  >Delete</a>
            <a href="Edit.php?id=<?php echo $value->getId() ?>"  class="linkE">Edit</a>
          </td>
        
        
        </tr>
    <?php }?>
      </tbody>
    </table>
    </div>
    

  
  </div>
  </section>
  
</body>
</html>

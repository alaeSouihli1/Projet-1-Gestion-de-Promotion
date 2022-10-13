<?php

include 'ConnectionDB.php';
if(isset($_POST['key'])){

$input = $_POST['key'];
$query= "SELECT * FROM promotion where `Name` like '{$input}%'";
$result = mysqli_query(getConnection(), $query);

// $data =  mysqli_fetch_assoc($result);
// 
if(mysqli_num_rows($result)>0){
?>

 
    
        <?php while(  $value = mysqli_fetch_assoc($result) ){ 
            $id =$value['id'];
            $name =$value['Name'];
            ?>

        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name  ?></td>
            <td>
            <a href="Edit.php?id=<?php echo $id?>" style=" background-color: #4986d1; /* Green */
            border: none;
            color: white;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 3px;">Edit</a>
            <a href="Delete.php?id=<?php echo $id ?>" style="background-color: #b52d2d; /* Green */
            border: none;
            color: white;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 3px;">Delete</a>
          </td>
        </tr>
    

    
    

<?php
}
}
}
?>
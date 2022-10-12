<?php


function getConnection(){
   
    $Connection = mysqli_connect('localhost', 'root', '', 'projet1');
      
return $Connection;

}

// $servername="localhost";
// $username="root";
// $password="";
// $database="projet1";

// //connection data base
// $conn=new mysqli($servername,$username,$password,$database);

//check connection
// if ($conn->connect_error){
// die("Connection failed: " . $conn->connect_error);
// }
 
// echo "connected successfully";
// mysqli_close($conn);
?>
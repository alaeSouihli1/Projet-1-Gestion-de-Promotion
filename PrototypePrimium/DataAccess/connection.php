<?php


function getConnection(){
   
    $Connection = mysqli_connect('localhost', 'root', '', 'projet1');
      
return $Connection;

}

?>
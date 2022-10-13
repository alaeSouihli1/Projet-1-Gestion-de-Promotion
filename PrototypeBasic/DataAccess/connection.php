<?php

class Connection{
    private $host;
    private $user;
    private $db;
    private $password;

    function getConnection(){
        $this->host='localhost';
        $this->user='root';
        $this->db='projet1';
        $this->password='';
        $Connection =new mysqli( $this->host,$this->user,$this->password,$this->db);
          
    return $Connection;
    
    }
}



?>
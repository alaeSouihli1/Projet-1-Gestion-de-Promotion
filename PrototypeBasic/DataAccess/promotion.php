<?php

class promotion{
    private $id;
    private $Name;

    public function getName(){
        return $this->Name;
    }
    public function setname($Name){
        $this->Name=$Name;
    }
    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this->id=$id;
    }

}

?>
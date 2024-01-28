<?php

class Produkti{
    private $id;
    private $image;
    private $text;
  


    function __construct($id,$image,$text){
            $this->id = $id;
            $this->image = $image;
            $this->text = $text;
    }


    function getId(){
        return $this->id;
    }
    function getImg(){
        return $this->image;
    }
    function getText(){
        return $this->text;
    }

}

?>
<?php
include_once __DIR__ . '/../repository/produktiRepository.php';
include_once __DIR__ . '/../models/produkti.php';


    if(empty($_POST['image']) || empty($_POST['text']) ){
        echo ".";
    }else{
            $image = $_POST['image'];
            $text = $_POST['text'];
            $id = $text.rand(100,999);
    
            $product  = new produkti($id,$image,$text);
            $produktiRepository = new ProduktiRepository();
    
            $produktiRepository->insertProduct($product);
            header("location:dashboard.php");
        
    
    
        }
    


?>
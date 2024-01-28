<?php

$proID = $_GET['id'];
include_once 'repository/produktiRepository.php';



$produktiRepository = new ProduktiRepository();

$produktiRepository->deleteProduct($proID);

header("location:dashboard.php");


?>
<?php
include_once __DIR__ . '/../repository/userRepository.php';
include_once __DIR__ . '/../models/user.php';


if(isset($_POST['submit'])){
    if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['email']) || empty($_POST['password'])){
        echo ".";
    }else{
        $name = $_POST['emri'];
        $surname = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $name.rand(100,999);

        $user  = new User($id,$name,$surname,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}



?>
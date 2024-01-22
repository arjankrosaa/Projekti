
<?php
$userId = $_GET['id'];
include_once 'repository/userRepository.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>


    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br> <br>
        <input type="text" name="emri"  value="<?=$user['emri']?>"> <br> <br>
        <input type="text" name="mbiemri"  value="<?=$user['mbiemri']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
    <p><a href="dashboard.php">Back to Dashboard</a></p>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $name = $_POST['emri'];
    $surname = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository->updateUser($id,$name,$surname,$email,$password);
    header("location:dashboard.php");
}


?>
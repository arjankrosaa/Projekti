<?php
//
include 'config.php';
error_reporting(0); 
session_start();


    if(isset($_POST['loginbtn'])){
        $email= $_POST['email'];
        $password= ($_POST['password']);
    
        $sql = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
    
        if($result -> num_rows>0 ){
            $row= mysqli_fetch_assoc($result);
            
            $_SESSION['email']= $row['email'];
            header("location: index.php");
        }else{
            echo "<script>alert('Opss,emaili ose passwordi jan gabim!')</script>";
        }
    }






?>

<?php

if(isset($_POST['ADMINloginbtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['email'];
        $password = $_POST['password'];

        include_once 'admin.php';

        $i=0;
        foreach($users as $user){
            $i++;
            if($username == $user['email'] && $password == $user['password']){
                echo $username;
                echo $password;

                session_start();
                $_SESSION['email'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = $user['role'];
                 setcookie("email",$username,time()+3600);
                 setcookie("email",$username,time()-3600);
                header("location:index.php");
                exit();

            }else{
                
                if($i == sizeof($users)){
                    echo "<script>alert('Opss,emaili ose passwordi jan gabim!')</script>";
                 exit();
                }
                
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <nav  class="zone">
        <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Projektet.php">Projektet</a></li>
            <li><a href="Sherbimet.php">Sherbimet</a></li>
            <li><a href="RrethNesh.php">Rreth Nesh</a></li>
            <li class="push"><a href="Regjistrohu.php">Regjistrohu</a></li>


        </ul>
    </nav>


    <div class="login">
        <div class="countiner">


            <div class="login-elements">
           <h1 style="text-align: center;padding-top: 30px;">LuxeLiving</h1>
                
           <div class="login-form">
           <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="email">Emaili:</label> <br>
                
                <input type="text" id="email" name="email" >
                <div class="error-message" id="emailError"></div><br>
                
                <label for="password">Password:</label> <br> 

                <input type="password"  id="password"  name="password"><br><br>
                <div class="error-message" id="pwError"></div><br>
            
                <button type="submit" name="loginbtn">LogIn</button><br><br>
                <button type="submit" name="ADMINloginbtn" style="font-size:16px;">LogIn As Admin</button>

              
                <a href="Regjistrohu.php" class="pallogari" style="margin-left: 110px;">Nuk Keni LLogari?</a>

            </form>
            </div>
            
            </div>
        </div>
    </div>




    

<script src="index.js"></script>
    
</body>
</html>


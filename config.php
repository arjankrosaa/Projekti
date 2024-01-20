

<?php

$server="localhost";
$user="root";
$pass="";
$database="luxeliving";

$conn= mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("<script>alert('Dicka shkoi gabim!')</script>");
}





?>
<?php
    
$server="localhost";
$user="root";
$pass="";
$db= "luxeliving";

$conn= mysqli_connect($server,$user,$pass, $db);

if(!$conn){
    die("Lidhja Deshtoi".mysqli_connect_error());
}
echo "Suksese";

?>
<?php
$host="localhost" ;
$user="root";
$password= "";
$database="olay";


$conn=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
    echo"Feiled to connect to MySQL".mysqli_connect_error();
}
?>
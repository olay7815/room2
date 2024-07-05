<?php  

include "connect.php"; 

$ep_id = $_POST["ep_id"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$adress = $_POST["adress"];
$phone = $_POST["phone"];
$depassment = $_POST["depassment"];

$sql = "UPDATE employee SET firstname = '$fname', lastname = '$lname', adress = '$adress', phone = '$phone', depassment = '$depassment' WHERE ep_id = $ep_id";
$result = mysqli_query($conn, $sql);

if ($result) {
   header ("location: index.php");

} else {
    echo "Error: " . mysqli_error($conn);  
}

?>


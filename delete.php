<?php
include "connect.php";
$ep_id=$_GET["ep_id"];
$sql = "DELETE FROM employee WHERE ep_id = $ep_id";
$result = mysqli_query($conn,$sql);
if ($result){
    
     header ("location: index.php");
}else{
    echo "ລຶບຂໍ້ມູນບໍ່ສຳເລັດ";
}

?>


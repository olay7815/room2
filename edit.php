<?php 
include "connect.php";
$ep_id=$_GET['ep_id'];
$sql = "SELECT * FROM employee WHERE ep_id = $ep_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    
    <div class="container ">
                <?php
                include "layout/nav.php";
                ?>

                <form class="my-3" action="update.php" method="post">
                <input type="hidden" name="ep_id"  value="<?php echo $row["ep_id"]?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">ຊື່</label>
                        <input type="text" id="firstname" name="firstname" class="form-control"  required   value="<?php echo $row["firstname"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">ນາມສະກຸນ</label>
                        <input type="text" id="lastname" name="lastname" class="form-control"  required   value="<?php echo $row["lastname"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="adress" class="form-label">ທີ່ຢູ່</label>
                        <input type="text" id="adress" name="adress" class="form-control"  required   value="<?php echo $row["adress"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">ເບີໂທ</label>
                        <input type="text" id="phone" name="phone" class="form-control"  required   value="<?php echo $row["phone"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="depassment" class="form-label">ພາກວິຊາ</label>
                        <input type="text" id="depassment" name="depassment" class="form-control"  required  value="<?php echo $row["depassment"]?>">
                    </div>
                    
                    <input type="submit" value="ບັນທືກ" class="btn btn-success">
                    <input type="reset" value="ຍົກເລີກ" class="btn btn-danger">
                </form>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

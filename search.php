<?php
include "connect.php";
$fname=$_POST["firstname"];
$sql= "SELECT * FROM employee WHERE firstname LIKE '%$fname' ORDER BY firstname ASC";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$order = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <?php
        include "layout/nav.php";
        ?>

    <div class="container ">
        <h2 class="text-center my-3">ຂ້ໍມູນນຖານຂ້ໍມູນ</h2>
        <hr>
        
        <?php if ($count > 0) { ?>
        <table class="table table-bordered border-dark">
            <thead>
                <tr>
                    <th>ລະຫັດ</th>
                    <th>ຊື່</th>
                    <th>ນາມສະກຸນ</th>
                    <th>ທີ່ຢູ່</th>
                    <th>ເບີໂທ</th>
                    <th>ພາກວິຊາ</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $order++; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["adress"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["depassment"]; ?></td>
                    <td><a class="btn btn-danger" href="delete.php?ep_id=<?php echo $row["ep_id"]; ?>"
                            onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນ ຫຼື ບໍ?')" ;>ລຶບຂໍ້ມູນ</a>
                        <a class="btn btn-success" href="edit.php?ep_id=<?php echo $row["ep_id"];?>">ແກ້ໄຂ</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger">
            <p>ບໍ່ມີຂໍ້ມູນໃນຖານຂໍ້ມູນ</p>
        </div>

        <?php } ?>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
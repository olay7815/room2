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
                <?php
                include "layout/nav.php";
                ?>
    <div class="container my-3">
               
                <h2 class="text-center">ເພີ່ມຂໍ້ມູນສະມາຊິກ</h2>

                <form class="my-3" action="save.php" method="post">
                    <div class="mb-3">
                        <label for="fname" class="form-label">ຊື່</label>
                        <input type="text" id="firstname" name="firstname" class="form-control"  required>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">ນາມສະກຸນ</label>
                        <input type="text" id="lastname" name="lastname" class="form-control"  required>
                    </div>
                    <div class="mb-3">
                        <label for="adress" class="form-label">ທີ່ຢູ່</label>
                        <input type="text" id="adress" name="adress" class="form-control"  required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">ເບີໂທ</label>
                        <input type="text" id="phone" name="phone" class="form-control"  required>
                    </div>
                    <div class="mb-3">
                        <label for="depassment" class="form-label">ພາກວິຊາ</label>
                        <input type="text" id="depassment" name="depassment" class="form-control"  required>
                    </div>
                    
                    <input type="submit" value="ບັນທືກ" class="btn btn-success">
                    <input type="reset" value="ຍົກເລີກ" class="btn btn-danger">
                </form>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

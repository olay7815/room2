<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $adress = $_POST["adress"];
    $phone = $_POST["phone"];
    $depassment = $_POST["depassment"];

    $sql = "INSERT INTO employee (firstname, lastname, adress, phone, depassment) VALUES ( '$fname', '$lname', '$adress', '$phone', '$depassment')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
            alert("ບັນທືກຂໍ້ມູນສຳເລັດ");
            window.location.href = "index.php";
        </script>';
    } else {
        echo '<script>
            alert("Error: ' . mysqli_error($conn) . '");
            window.history.back();
        </script>';
    }

    mysqli_close($conn);
} else {
    echo '<script>
        alert("Invalid request method.");
        window.history.back();
    </script>';
}
?>

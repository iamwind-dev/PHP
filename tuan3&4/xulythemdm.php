</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <h1>Xử ls thêm SP</h1>
    <?php
    $tendm = $_GET["tendm"];
    $conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
    $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('$tendm')";
    $kq = mysqli_query($conn, $sql);
    header("Location:danhsachdanhmuc.php");
    ?>

</body>

</html>
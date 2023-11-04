<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>
    <h1>Xử lý đăng kí</h1>
    <?php
    $username = $_GET["user"];
    $password = $_GET["pass"];
    $conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
    $sql = "INSERT INTO user(tendangnhap,matkhau) VALUES ('$username','$password')";
    $kq = mysqli_query($conn, $sql);
    header("Location:Trangchu.php");
    ?>

</body>

</html>
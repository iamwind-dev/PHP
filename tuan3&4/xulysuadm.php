<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <h1>Xử ls sửa SP</h1>
    <?php
    $id = $_GET["id"];
    $tendanhmuc=$_GET["tendanhmuc"];
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "UPDATE danhmuc SET tendanhmuc='$tendanhmuc'  WHERE id=$id";
    $kq=mysqli_query($conn,$sql);
    header("Location:danhsachdanhmuc.php");
?>
    
</body>

</html>
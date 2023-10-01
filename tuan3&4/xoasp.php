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
    <h1>Xóa SP</h1>
    <?php
    echo '<br>';
    $iddm = $_GET['iddm'];
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "DELETE  from sanpham where id=".$_GET['idsp'];
    $kq=mysqli_query($conn,$sql);
        header("Location:danhsachdanhmuc.php");
?>
    
</body>

</html>
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
    $tensp=$_GET["tensp"];
    $soluong=$_GET["soluong"];
    $gia=$_GET["gia"];
    $iddanhmuc=$_GET["iddanhmuc"];
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "UPDATE sanpham SET tensp='$tensp' ,Gia=$gia,Soluong=$soluong,Iddanhmuc=$iddanhmuc WHERE ID=$id";
    $kq=mysqli_query($conn,$sql);
    header("Location:danhsachsanpham.php?iddm=$iddanhmuc");
?>
    
</body>

</html>
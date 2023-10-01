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
    <h1>Xử ls thêm SP</h1>
    <?php
    $tensp=$_GET["tensp"];
    $soluong=$_GET["soluong"];
    $gia=$_GET["gia"];
    $iddanhmuc=$_GET["iddanhmuc"];
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "INSERT INTO sanpham(tensp,Gia,Soluong,Iddanhmuc) VALUES ('$tensp',$gia,$soluong,$iddanhmuc)";
    $kq=mysqli_query($conn,$sql);
    header("Location:danhsachsanpham.php?iddm=$iddanhmuc");
?>
    
</body>

</html>
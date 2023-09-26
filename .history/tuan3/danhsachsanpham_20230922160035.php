<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách san pham</title>
</head>

<body>
    <h1>Danh sach san pha,</h1>
    <?php
    include("header.php");
    echo '<br>';
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from sanpham where iddm=$_GET";
    $kq=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($kq)){
        echo $row['id'];
        echo $row['tendanhmuc'].'<br>';
        echo '<hr>';
    }
?>
    
</body>

</html>
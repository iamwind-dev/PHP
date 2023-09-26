<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách san pham</title>
</head>

<body>
    <?php
    
    ?>
    <h1>Danh sach san pha,</h1>
    <?php
    include("header.php");
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from sanpham where iddanhmuc=".$_GET['iddm'];  
    $kq=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($kq)){
        echo "Ten san pham: ".$row['tensp'].'<br>';
        echo '<hr>';
    }
?>
    
</body>

</html>
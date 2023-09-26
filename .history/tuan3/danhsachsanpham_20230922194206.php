<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách san pham</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <h1>Danh sach san pham</h1>
    <?php
    
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from sanpham where iddanhmuc=".$_GET['iddm'];  
    $kq=mysqli_query($conn,$sql);
    echo "<table>";
    while ($row=mysqli_fetch_array($kq)){
        echo "ID: ".$row['id'].'<br>';
        echo "Ten san pham: ".$row['tensp'].'<br>';
        echo '<hr>';
    }
    echo "</table"
?>
    
</body>

</html>
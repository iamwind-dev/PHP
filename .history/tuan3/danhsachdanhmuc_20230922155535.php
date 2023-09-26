<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>
    <h1>Danh sach danh muc</h1>
    <?php
    include("header.php");
    echo '<br>';
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from danhmuc";
    $kq=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($kq)){
        echo $row['id'];
        echo $row['tendanhmuc'].'<a href="danhsachsanpham.php?iddm='.$row['id'].'";
        echo '<hr>';
    }
?>
    
</body>

</html>
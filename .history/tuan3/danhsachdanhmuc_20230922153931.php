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
    echo
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from danhmuc";
    $kq=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($kq)){
        echo $row['id'].'<br>';
        echo $row['tendanhmuc'];
    }
?>
    
</body>

</html>
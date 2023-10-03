
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>


    <h1> Sửa SP</h1>
        <?php
        include("header.php");
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from danhmuc where id=".$_GET["iddm"];
    $kq=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($kq);
    ?>
    <form method="GET" action="xulysuadm.php" >
        ID <br>
        <input type="text" name="id" value="<?php echo $row['id'];?>"><br>
        Tên danh mục <br>
        <input type="text" name="tendanhmuc" value="<?php echo $row['tendanhmuc'];?>"><br>
        <input type="submit" name="sua" value=" Sua danh muc này">
    </form>
        
</body>

</html>
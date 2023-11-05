
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
    $sql = "SELECT * from sanpham where id=".$_GET["idsp"];
    $kq=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($kq);
    ?>
    <form method="GET" action="xulysuasp.php?" >
        ID <br>
        <input type="text" name="id" value="<?php echo $row['id'];?>"><br>
        Tên SP <br>
        <input type="text" name="tensp" value="<?php echo $row['tensp'];?>"><br>
        Số lượng
        <input type="text" name="soluong" value="<?php echo $row['Soluong'];?>"><br>
        Đơn Giá
        <input type="text" name="gia" value="<?php echo $row['Gia'];?>"><br>
        danh muc
        <select name="iddanhmuc">
            <?php
            $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from danhmuc ";
    $kq=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($kq)){
        echo '<option value="'.$row["id"].'">'.$row['tendanhmuc'].'</option>';
    }
?>
        </select>
        <br>
        <input type="submit" name="sua" value=" Sua SP này">
    </form>
        
</body>

</html>
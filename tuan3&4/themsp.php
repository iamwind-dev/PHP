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
    <h1>Thêm SP</h1>
    <form action="xulythemsp.php" method="GET">
        Tên SP <br>
        <input type="text" name="tensp"><br>
        Số lượng
        <input type="text" name="soluong"><br>
        Đơn Giá
        <input type="text" name="gia"><br>
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

        <input type="submit" value="Thêm SP này">
    </form>
</body>

</html>
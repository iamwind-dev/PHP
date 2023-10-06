<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Danh sách san pham</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <h1>Danh sach san pham</h1>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>So Lượng</th>
        <th>hình ảnh</th>
        <th>Xóa</th>
        <th>Sửa</th>
      </tr>
    </thead>
    <tbody>
    <?php
    
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from sanpham where iddanhmuc=".$_GET['iddm'];  
    $kq=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($kq)){
        echo '<tr>';
        echo '<td><a href="chitietsp.php?idsp='.$row['id'].'">'.$row['tensp'].'</a></td>';
        echo '<td>'.$row['Gia'].'</td>';
        echo '<td>'.$row['Soluong'].'</td>';
        echo '<td> <img src="uploads/'.$row['hinhanh'].'"/></td>';
        echo '<td><a href="xoasp.php?idsp='.$row['id'].'">Xóa</a></td>';
        echo '<td><a href="suasp.php?idsp='.$row['id'].'">Sửa</a></a></td>';
        echo '</tr>';
    }
?>
    </tbody>
    </table>
    
</body>

</html>
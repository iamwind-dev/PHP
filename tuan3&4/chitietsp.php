<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tuan3&4/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Danh sách danh mục</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <div id='cart'>
    <?php
        $ok = 1;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $k => $v) {
                if (isset($v)) {
                    $ok = 2;
                }
            }
        }
        if ($ok != 2) {
            echo '<p>Ban khong co mon hang nao trong gio hang</p>';
        } else {
            $items = $_SESSION['cart'];
            echo '<p>Ban dang co <a href="giohang.php">' . count($items) . ' mon hang trong
gio hang</a></p>';
        }
        ?>
    </div>
    <h1>Thông tin sản phẩm</h1>
    <?php
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from sanpham where id=".$_GET['idsp'];
    $kq=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($kq);
        echo '<tr>';
        echo '<td> <img src="uploads/'.$row['hinhanh'].'"/></td><br>';
        echo '<td>'.$row['tensp'].'</td><br>';
        echo '<td>Giá: '.number_format($row['Gia'],3).' VND</td><br>';
        echo '<td>Số lượng: '.$row['Soluong'].'</td><br>';
        echo '<td>Mô tả: '.$row['mota'].'</td><br>';
        echo '<td><a href="themgiohang.php?idsp=' . $row['id'] . '">Thêm vào giỏ hàng</a></td>';
        echo '</tr>';
?>
    
</body>

</html>
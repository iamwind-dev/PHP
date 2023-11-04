<?php 
 include ("header.php");
 session_start();
?>
<html>
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
        }
        else {
            $items = $_SESSION['cart'];
            echo '<p>Ban dang co <a href="giohang.php">' . count($items) . ' mon hang trong
gio hang</a></p>';
        }
        ?>
    </div>
    <h1>Thong tin san pham</h1>
    
    <?php
    include ("dbconnect.php");
    $sql = "SELECT * FROM sanpham WHERE id =".$_GET['idsp'];
    $kq =mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($kq);
    echo "<img src='".$row['hinhanh']."'><br>";
    echo $row['tensp'];
    echo "<br>";
    echo 'Gia: '.$row['Gia'];
    echo "<br>";
    echo $row['mota'];
    echo '<br>';
    echo '<td><a href="themgiohang.php?idsp=' . $row['id'] . '">Thêm vào giỏ hàng</a></td>';
    ?>
</html>
<?php
session_start();
if (isset($_POST['submit'])) {
    foreach ($_POST['qty'] as $key => $value) {
        if (($value == 0) and (is_numeric($value))) {
            unset($_SESSION['cart'][$key]);
        } else if (($value > 0) and (is_numeric($value))) {
            $_SESSION['cart'][$key] = $value;
        }
    }
    header("location:giohang.php");
}
?>
<html>

<head>
    <title>Gio Hang</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>Gio Hang</h1>
    <?php
    $ok = 1;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $k => $v) {
            if (isset($k)) {
                $ok = 2;
            }
        }
    }

    if ($ok == 2) {
        echo "<form action='giohang.php' method='post'>";
        foreach ($_SESSION['cart'] as $key => $value) {
            $item[] = $key;
        }
        $str = implode(",", $item);
        $strr = ltrim($str, ',');
        $conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
        $sql = 'SELECT * from sanpham where id in (' . $strr . ')';
        $total = 0;
        $kq = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($kq)) {
            echo "<div class='pro'>";
            echo "<h3>" . $row['tensp'] . "</h3>";
            echo "Gia: " . number_format($row['Gia'], 3) . " VND<br />";
            echo '<p align="right">So Luong: <input type="text"
name="qty[' . $row['id'] . ']" size="5" value=' . $_SESSION['cart'][$row['id']] . '> - ';
            echo '<a href="xoaspgh.php?productid=' . $row['id'] . '">Xoa Sach
Nay</a></p>';
            echo '<p align="right"> Gia tien cho mon hang: ' .
                number_format($_SESSION['cart'][$row['id']] * $row['Gia'], 3) . ' VND</p>';
            echo "</div>";

            $total += $_SESSION['cart'][$row['id']] * $row['Gia'];
        }
        echo "<div class='pro' align='right'>";
        echo '<b>Tong tien cho cac mon hang: <font color="red">' .
            number_format($total, 3) . ' VND</font></b>';
        echo "</div>";
        echo "<input type='submit' name='submit' value='Cap Nhat Gio Hang'>";
        echo "<div class='pro' align='center'>";
        echo "<b><a href='danhsachdanhmuc.php'>Mua Tiep</a> - <a
href='xoaspgh.php?productid=0'>Xoa Bo Gio Hang</a></b>";
        echo "</div>";
    } else {
        echo "<div class='pro'>";
        echo "<p align='center'>Ban khong co mon hang nao trong gio hang<br /><a
href='danhsachdanhmuc.php'>Buy</a></p>";
        echo "</div>";
    }
    ?>
</body>

</html>
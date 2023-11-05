<?php 
session_start();
if(isset($_POST['submit'])){
    foreach($_POST['qty'] as $key => $value){
        if (($value == 0) and (is_numeric($value))) {
            unset($_SESSION['cart'][$key]);


            
        } else if (($value > 0) and (is_numeric($value))){
            $_SESSION['cart'][$key] = $value;
        }
    }
    header("location:giohang.php");
}
?>

<html>
    <head>

    </head>
    <body>
        <h1>Gio hang</h1>
        <?php
        $ok = 1;
        if(isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $key => $value) {
                if(isset($key)){
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
            include('dbconnect.php');
            $sql = 'SELECT * from sanpham where id in (' . $str . ')';
            $total = 0;
            $kq = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($kq)) {
                ?>
            <h3> <?php echo $row['tensp'] ?></h3>
                Gia: <?php echo number_format($row['Gia'], 3) ?> VND<br />
                So Luong: <input type="text"
name="qty[' <?php echo $row['id'] ?> ']" size="5" value=' <?php echo $_SESSION['cart'][$row['id']] ?>'> - 
<a href="xoaspgh.php?productid='<?php echo $row['id'] ?>'">Xoa Sach
Nay</a></p>

<p align="right"> Gia tien cho mon hang:  <?php echo
                    number_format($_SESSION['cart'][$row['id']] * $row['Gia'], 3) ?>  VND</p>
        <?php
        $total += $_SESSION['cart'][$row['id']] * $row['Gia'];
        echo '<b>Tong tien cho cac mon hang: <font color="red">' .
            number_format($total, 3) . ' VND</font></b>';
        echo "<input type='submit' name='submit' value='Cap Nhat Gio Hang'>";
        echo "<b><a href='danhsachdanhmuc.php'>Mua Tiepp</a> - <a
href='xoaspgh.php?productid=0'>Xoa Bo Gio Hang</a></b>";
            }
        }
        else {
        echo "<div class='pro'>";
        echo "<p align='center'>Ban khong co mon hang nao trong gio hang<br /><a
href='danhsachdanhmuc.php'>Buy</a></p>";
        echo "</div>";
    }
        ?>
    </body>
</html>
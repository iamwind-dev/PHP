<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tuan3&4/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        <h2>Bình luận</h2>
        <div id="binhluan">
<?php
$sql1 = "SELECT * from binhluan where idsanpham=" . $_GET['idsp'];
$kq1 = mysqli_query($conn, $sql1);
while ($row1 = mysqli_fetch_array($kq1)) {
    echo '<p>' . $row1['idbinhluan'] . '.' . $row1['noidung'] . '</p>';
}
echo '</div>';
?>
<input type="hidden" value="<?php echo $_GET['idsp']?>" id="idsp">
<textarea name="noidung" id="noidung" ></textarea>
<input type="button" value="Gửi" id="btnGui">
<script>
    $("#btnGui").click(function(){
        $.ajax({
            method :"POST",
            url:'/tuan3&4/thembinhluan.php',
            data:{id: $('#idsp').val(), noidung: $('#noidung').val()},
        })
        .done(function(data){
            $("#binhluan").append('<p>'+$('#noidung').val()+'</p>');
            $("#noidung").val('');
        })
    })
</script>





        
    
        
    
</body>

</html>
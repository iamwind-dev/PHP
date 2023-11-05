    <?php
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "DELETE  from sanpham where id=".$_GET['idsp'];
    $kq=mysqli_query($conn,$sql);
        header("Location:danhsachdanhmuc.php");
?>

    <?php
    $id = $_GET["idsp"];
    $tensp=$_GET["tensp"];
    $soluong=$_GET["soluong"];
    $gia=$_GET["gia"];
    $iddanhmuc=$_GET["iddanhmuc"];
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "UPDATE sanpham SET tensp='$tensp' ,Gia=$gia,Soluong=$soluong,Iddanhmuc=$iddanhmuc WHERE ID=$id";
    $kq=mysqli_query($conn,$sql);
    header("Location:danhsachsanpham.php?iddm=$iddanhmuc");
?>
    
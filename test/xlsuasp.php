<?php 
$id=$_GET["id"];
$ten=$_POST["tensp"];
$soluong=$_POST["soluong"];
$gia=$_POST["gia"];
$iddanhmuc=$_POST["iddanhmuc"];
$mota = $_POST['content'];
include ("dbconnect.php");
$sql="UPDATE sanpham SET tensp='$ten',soluong=$soluong,gia=$gia,iddanhmuc=$iddanhmuc,mota='$mota' WHERE id='$id'";
    $kq=mysqli_query($conn,$sql);
    //header("location:dsdm.php?id=$iddm");
?>
<?php
$u = $_GET["user"];
$p = $_GET["pass"];
include("dbconnect.php");
$sql="INSERT INTO user (tendangnhap,matkhau) VALUES ('$u','$p')";
$kq=mysqli_query($conn,$sql);
if(isset($kq)){
    header("location:dangnhap.php");
}else{
    echo "Lỗi";
}
?>
<?php
include ("dbconnect.php");
$sql = 'DELETE FROM sanpham WHERE id =' . $_GET['idsp'];
$kq=mysqli_query($conn,$sql);
header("Location:dsdm.php");
?>
<?php
$id = $_GET["id"];
$tendanhmuc = $_GET["tendanhmuc"];
$conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
$sql = "UPDATE danhmuc SET tendanhmuc='$tendanhmuc'  WHERE id=$id";
$kq = mysqli_query($conn, $sql);
header("Location:danhsachdanhmuc.php");
?>
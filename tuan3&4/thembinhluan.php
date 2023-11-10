<?php
$idsp = $_POST["id"];
$noidung = $_POST["noidung"];
$conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
$sql = "INSERT INTO binhluan(iduser,idsanpham,noidung) VALUES (1,$idsp,'$noidung')";
$kq = mysqli_query($conn, $sql);
?>
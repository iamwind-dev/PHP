<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("Location:danhsachdanhmuc.php");
    }
$tensp = $_POST["tensp"];
$soluong = $_POST["soluong"];
$gia = $_POST["gia"];
$iddanhmuc = $_POST["iddanhmuc"];
$hinhanh = $target_file;
$motasp = $_POST["content"];
include("dbconnect.php");

$sql = "INSERT INTO sanpham(tensp,Gia,Soluong,Iddanhmuc,hinhanh,mota) VALUES ('$tensp',$gia,$soluong,$iddanhmuc,'$hinhanh','$motasp');";
$kq = mysqli_query($conn, $sql);
    header("location: dsdm.php");
?>
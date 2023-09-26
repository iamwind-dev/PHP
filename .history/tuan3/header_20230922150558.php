<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="Trangchu.php">Trang chu</a>
    <a href="TrangLienHe.php">Lien He</a>
    <a href="Tr.php">Lien He</a>
    <?php
    if(isset($_COOKIE['user'])){
        echo 'Xin chao ban ' . $_COOKIE['user'];
    } else {
        echo '<a href="dangnhap.php">Dang nhap</a>';
    }
    ?>
</body>

</html>
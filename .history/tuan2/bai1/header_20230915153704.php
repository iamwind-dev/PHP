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
    <?php
    if(isset($_SESSION['user'])){
        echo 'Xin chao ban' . $_SESSION['user'];
    } else {
    }
    
    ?>
</body>

</html>
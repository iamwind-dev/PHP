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
    <h1>Xu ly dang nhap</h1>
    <?php
    $u = $_GET['username'];
    $p = $_GET['password']; 
    
    //b
    if (!preg_match('/^[a-zA-Z0-9]+$/', $u)) {
        echo "Tên đăng nhập chỉ được chứa ký tự a-z, A-Z và 0-9.";
        exit();
    }else if ($u=='' || $p=='') {
        echo "Vui lòng điền đầy đủ tên đăng nhập và mật khẩu.";
        exit();//a c
    } else if($p=="123"){
        echo "Dang nhap thanh cong<br>";
        echo "Ten Dang nhap la: $u va mat khau la: $p<br>";
        //$_SESSION['user']=$u;
        setcookie("user", $u, time() + (60 * 10));
    }
    ?>
    <a href="Trangchu.php">Trang chu
    </a>
</body>

</html>
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
    //a
        echo "Ten Dang nhap la: $u va mat khau la: $p<br>";
    //b
    if (!preg_match('/^[a-zA-Z0-9]+$/', $u)) {
        echo "Tên đăng nhập chỉ được chứa ký tự a-z, A-Z và 0-9.";
        exit();
    }
    //c 
     if ($u=='' || $p=='') {
        echo "Vui lòng điền đầy đủ tên đăng nhập và mật khẩu.";
        exit();
    } else {
        
    }
    //d
    
    ?>
</body>

</html>
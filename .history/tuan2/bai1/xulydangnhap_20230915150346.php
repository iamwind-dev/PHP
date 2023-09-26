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
        echo "Ten Dang nhap la: $u va mat khau la $p<br>";
    //c 
    if ($u == '') {
        echo "Nguoi dung chua nhap username<br>";
    }
    if ($p == '') {
        echo "Nguoi dung chua nhap password";
    }
    ?>
</body>

</html>
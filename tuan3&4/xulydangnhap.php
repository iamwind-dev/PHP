<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>
    <h1>Xử lý đăng nhập</h1>
    <?php
    $username=$_GET["username"];
    $password=$_GET["password"];
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * FROM user where tendangnhap='$username' and matkhau=$password;";
    $kq=mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($kq)){
        header("Location:danhsachdanhmuc.php?");
    } else{
        echo "Sai";
    }
?>
    
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đăng ký</title>
</head>

<body>
    <h1>Thông tin đăng ký</h1>
    <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $hobbies = isset($_POST["hobby"]) ? implode(", ", $_POST["hobby"]) : "";
        $country = $_POST["country"];
        
        echo "<p>Tên đăng nhập: $username</p>";
        echo "<p>Mật khẩu: $password</p>";
        echo "<p>Giới tính: $gender</p>";
        echo "<p>Sở thích: $hobbies</p>";
        echo "<p>Quốc gia: $country</p>";
    ?>
</body>

</html>
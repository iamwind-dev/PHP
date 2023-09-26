<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dang ki</title>
</head>

<body>
    <h1>Form dang ki</h1>
    <form action="trangxuli.php" method="post">
        Tên đăng nhập: <input type="text" name="username"><br>
        Mật Khẩu: <input type="text" name="password"><br>
        Giới tính:
        <input type=" radio" name="gender" value="Nam">Nam
        <input type="radio" name="gender" value="Nữ">Nữ
        <br>
        Sở thích:
        <input type="checkbox" name="hobby[]" value="Đọc sách">Đọc sách
        <input type="checkbox" name="hobby[]" value="Nghe nhạc">Nghe nhạc
        <input type="checkbox" name="hobby[]" value="Du lịch">Du lịch
        <br>
        Quốc gia:
        <select name="country">
            <option value="Vietnam">Việt Nam</option>
            <option value="USA">Hoa Kỳ</option>
            <option value="Japan">Nhật Bản</option>
        </select><br>
        <input type="submit" value="Đăng ký">
    </form>
</body>

</html>
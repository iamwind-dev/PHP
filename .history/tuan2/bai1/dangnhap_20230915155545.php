<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dang Nhap</title>
</head>

<body>

    <h1>Form dang nhap</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        ten dang nhap<input type="text" name="username"><br>
        mat khau <input type="password" name="password"><br>
        <input type="submit" value="Dang nhap">
</body>

</html>
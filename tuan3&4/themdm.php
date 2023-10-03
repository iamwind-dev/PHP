<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <h1>Thêm danh mục</h1>
    <form action="xulythemdm.php" method="GET">
        Tên danh mục <br>
        <input type="text" name="tendm"><br>
        <br>

        <input type="submit" value="Thêm danh mục này">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tuan3&4/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Danh sách danh mục</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <h1>Danh sach danh muc</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Tên san pham</th>
                <th>Gia</th>
                <th>So luong</th>
                <th>hinh anh</th>
                <th>Sua</th>
                <th>Xoa</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include("dbconnect.php");
            $sql = 'SELECT * from sanpham where iddanhmuc='.$_GET['iddm'];
            $kq = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($kq)) {
                echo '<tr>';
                echo '<td><a href="ctsp.php?idsp=' . $row['id'] . '">' . $row['tensp'] . '</a>';
                echo '<td><a href="ctsp.php?idsp=' . $row['id'] . '">' . $row['Gia'] . '</a>';
                echo '<td><a href="ctsp.php?idsp=' . $row['id'] . '">' . $row['Soluong'] . '</a>';
                echo '<td><a href="ctsp.php?idsp=' . $row['id'] . '"><img src="' . $row['hinhanh'] . '"></a>';
                echo '<td><a href="suasp.php?idsp=' . $row['id'] . '">     Sửa     </td>';
                echo '<td><a href="xoasp.php?idsp=' . $row['id'] . '">     Xoa     </td>';
                echo '</tr>';
            }
            ?>
            
        </tbody>
    </table>
            <img src="">
</body>

</html>
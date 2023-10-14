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
        <th>Tên danh mục</th>
        <th>Sửa</th>

      </tr>
    </thead>
    <tbody>
      <?php

      $conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
      $sql = "SELECT * from danhmuc";
      $kq = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($kq)) {
        echo '<tr>';
        echo '<td><a href="danhsachsanpham.php?iddm=' . $row['id'] . '">' . $row['tendanhmuc'] . '</a>';
        echo '<td><a href="suadm.php?iddm=' . $row['id'] . '">     Sửa     </a></a></td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</body>

</html>
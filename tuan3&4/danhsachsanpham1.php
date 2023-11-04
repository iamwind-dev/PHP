<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/tuan3&4/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Danh sách sản phẩm/title>
</head>

<body>
  <?php
  include("header.php");
  ?>
  <div id='cart'>
    <?php
    $ok = 1;
    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $k => $v) {
        if (isset($v)) {
          $ok = 2;
        }
      }
    }
    if ($ok != 2) {
      echo '<p>Ban khong co mon hang nao trong gio hang</p>';
    } else {
      $items = $_SESSION['cart'];
      echo '<p>Ban dang co <a href="giohang.php">' . count($items) . ' mon hang trong
gio hang</a></p>';
    }
    ?>
  </div>
  <h1>Danh sach san pham</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>So Lượng</th>
        <th>hình ảnh</th>
        <th>Xóa</th>
        <th>Sửa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
      $result = mysqli_query($conn, 'SELECT COUNT(id) AS total FROM sanpham');
      $row = mysqli_fetch_array($result);
      $total_records = $row['total'];
      $current_page = isset($_GET['p']) ? $_GET['p'] : 1;
      $limit = 3;
      $total_page = ceil($total_records / $limit);
      if ($current_page > $total_page) {
        $current_page = $total_page;
      } else if ($current_page < 1) {
        $current_page = 1;
      }

      $start = ($current_page - 1) * $limit;

      $sql = 'SELECT * from sanpham LIMIT ' . $start . ', ' . $limit;
      $kq = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($kq)) {
        echo '<tr>';
        echo '<td><a href="chitietsp.php?idsp=' . $row['id'] . '">' . $row['tensp'] . '</a></td>';
        echo '<td> ' . number_format($row['Gia'], 3) . ' VND</td>';
        echo '<td>' . $row['Soluong'] . '</td>';
        echo '<td> <img src="uploads/' . $row['hinhanh'] . '"/></td>';
        echo '<td><a href="xoasp.php?idsp=' . $row['id'] . '">Xóa</a></td>';
        echo '<td><a href="suasp.php?idsp=' . $row['id'] . '">Sửa</a></a></td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <?php
  if($current_page > 1 && $total_page >1){
      echo'<a href="danhsachsanpham1.php?p='.($current_page-1).'">Trước</a> | ';
  }

  for ($i=1;$i<=$total_page;$i++){
      if($i == $current_page){
          echo '<b>'.$i.'</b> | ';
      }else{
          echo '<a href="danhsachsanpham1.php?p='.$i.'">'.$i.'</a> | ';
      }
  }
?>
</body>

</html>
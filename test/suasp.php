<?php
include ("header.php"); 
?>
<html>
    <head>
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    </head>
    <body>
      <h1>Sua san pham</h1>
      <?php
        include("dbconnect.php");
      $sql = "SELECT * FROM sanpham where id=" . $_GET['idsp'];
      $kq=mysqli_query($conn,$sql);
      $row1=mysqli_fetch_array($kq);
        ?>
        <form action="xlsuasp.php" method="post" enctype="multipart/form-data">
             <br>
        <input type="text" name="id" value="<?php echo $row1['id'] ?>"><br>
        Tên SP <br>
        <input type="text" name="tensp" value="<?php echo $row1['tensp'] ?>"><br>
        Số lượng
        <input type="text" name="soluong" value="<?php echo $row1['Soluong'] ?>"><br>
        Đơn Giá
        <input type="text" name="gia" value="<?php echo $row1['Gia'] ?>"><br>
        danh muc
        <select name="iddanhmuc">
            <?php

            include("dbconnect.php");
            $sql = "SELECT * from danhmuc ";
            $kq = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($kq)) {
                echo '<option value="' . $row["id"] . '">' . $row['tendanhmuc'] . '</option>';
            }
            ?>
        </select>
        <br>
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <textarea name="content" id="editor">
                    <?php echo $row1['mota'] ?>
                </textarea>
            <input type="submit" value="Sua">
        </form>
        <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    </body>
</html>
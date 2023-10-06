<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <title>Danh sách danh mục</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <h1>Thêm SP</h1>
    <form action="xulythemsp.php" method="POST" enctype="multipart/form-data">
        Tên SP <br>
        <input type="text" name="tensp"><br>
        Số lượng
        <input type="text" name="soluong"><br>
        Đơn Giá
        <input type="text" name="gia"><br>
        danh muc
        <select name="iddanhmuc">
            <?php
    
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "SELECT * from danhmuc ";
    $kq=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($kq)){
        echo '<option value="'.$row["id"].'">'.$row['tendanhmuc'].'</option>';
    }
?>
        </select>
        <br>
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
        <br>
        <input type="submit" value="Thêm SP này">
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>
<html>
    <head>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    </head>

    <body>
        <?php
        include ("header.php");
        ?>
        <form action="xlthemsp.php" method="post" enctype="multipart/form-data">
            Ten san pham <input type="text" name="tensp"><br>
            Gia <input type="text" name="gia"><br>
            So luong <input type="text" name="soluong"><br>
            Danh muc <select name="iddanhmuc" >
                <?php 
                include("dbconnect.php");
                $sql="select * from danhmuc";
                $result=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_array($result)){
                    echo "<option value=".$row['id'].">".$row['tendanhmuc']."</option>";
                }
                ?>
            </select><br>
            Hinh anh <input type="file" name="fileToUpload"><br>
            Mo ta <textarea name="content" id="editor" ></textarea>
            <input type="submit" value="Them SP">
        </form>
    </body>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</html>
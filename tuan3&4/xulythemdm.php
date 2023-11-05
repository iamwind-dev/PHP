    <?php
    $tendm = $_GET["tendm"];
    $conn = mysqli_connect('localhost', 'root', '060304', 'banhang');
    $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('$tendm')";
    $kq = mysqli_query($conn, $sql);
    header("Location:danhsachdanhmuc.php");
    ?>
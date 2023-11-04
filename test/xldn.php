<html>
    <body>
        <?php
        $u = $_GET["tendn"];
        $p = $_GET["mk"];
        include "dbconnect.php";
        $sql = "SELECT * FROM user WHERE tendangnhap = '$u' AND matkhau = '$p'";
        $kq=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_array($kq)){
            header("location:home.php");
        }else{
            header("location:dangnhap.php");
        }
        ?>
    </body>
</html>
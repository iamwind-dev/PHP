<?php
include ("header.php");
?>
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Ten danh muc</th>
                    <th>Sua</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("dbconnect.php");
                $sql = "SELECT * FROM danhmuc";
                $kq=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($kq)){
                    echo "<tr>";
                    echo '<td><a href="dssp.php?iddm='.$row['id'].'">'.$row['tendanhmuc'].'</td>';
                    echo '<td><a href="suadm.php?iddm='.$row['id'].'">Sua</td>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
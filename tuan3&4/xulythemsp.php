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
    <h1>Xử ls thêm SP</h1>
    <?php
    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("Location:danhsachdanhmuc.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
    $tensp=$_POST["tensp"];
    $soluong=$_POST["soluong"];
    $gia=$_POST["gia"];
    $iddanhmuc=$_POST["iddanhmuc"];
    $hinhanh = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
    $motasp = $_POST["content"];
    $conn=mysqli_connect('localhost','root','060304','banhang');
    $sql = "INSERT INTO sanpham(tensp,Gia,Soluong,Iddanhmuc,hinhanh,mota) VALUES ('$tensp',$gia,$soluong,$iddanhmuc,'$hinhanh','$motasp')";
    $kq=mysqli_query($conn,$sql);
    
?>

    
</body>

</html>

<html>

<head>
    <title>Bai4</title>
</head>

<body>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$days = array('Chủ Nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7');
$current_time = date('d/m/Y H:i:s');
$day=date('d');
$month=date('m');
$year=date('Y');
$day_of_week = date('w');
echo "Hôm nay là {$days[$day_of_week]}, ngày $day tháng $month năm $year";
?>

</body>

</html>
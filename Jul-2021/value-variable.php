<?php
$price = 12300;
$total = $price * 2;
$water = "water is my love";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type"
          content="text/html; charset=UTF-8" />
    <title>sample page</title>
</head>
<body>
<h1>Hello PHP!</h1>
<div>
    <?php echo "금액：" . $total . "원"; ?><br>
    <?php echo $water; ?>
</div>
</body>
</html>
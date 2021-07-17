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
    <?php
        $sum = 0;
        $a = 10;

        while($sum<= 200) {
            $sum = $sum + $a;
            echo $sum ;
        }

        $total_price = 0;
        $price = 100;

        while($total_price < 1000) {
            $total_price += $price;
            echo $total_price;
        }
    ?>
</div>
</body>
</html>
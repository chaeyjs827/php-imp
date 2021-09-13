<?php
$price = array(12, 34, 5,344);
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
    <?php
        $price[1] = 1000;
        echo $price[1];

        $new_array = array("haha", "test");
        echo $new_array[0];
       // echo "test + " + $new_array[0];
    ?>
</div>
</body>
</html>
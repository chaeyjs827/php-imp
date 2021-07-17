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
        $num = 12346;
        $namogi = $num % 2;

        if($namogi == 0) {
            echo "짝수 요~";
        } else if($namogi == 1) {
            echo "홀수요~~";
        }
    ?>

</div>
</body>
</html>
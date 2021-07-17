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
    <?php echo "PHP으로 표시한 텍스트입니다."; ?>
    <?php
       $a = 10;
       echo - $a;
    ?>
    <?php
       $a1 = 10;
       $a2 = 30;
       echo $a1 + $a2;

       $b1 = 10;
       $b2 = 10;
       echo $b1 * $b2;
       echo $b1 * $b2;

       /*
        * 연산자 우선 순위
        * 1, *, /, %는 순서대로 계산함
        * 2, +,-는 순서대로 계산함
        * 1은 2보다 먼저 계산함
        */
    ?>
</div>
</body>
</html>
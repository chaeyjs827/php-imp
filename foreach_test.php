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

        $data = array(1, 2, 3, 4, 5);

        foreach($data as $value) {
            echo $value . "<br/>";
        }

        //var_dump($data);



    ?>
</div>
</body>
</html>
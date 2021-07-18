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

        //is_file() // 파일이 존재 하면 true 를 반환함

        var_dump(is_file('data.txt')); // 파일이 존재하니 true
        var_dump(is_file('no-exist-file.txt'));  // 존재 안해서 false

        var_dump(is_dir('data.txt'));
        var_dump(file_get_contents('data.txt'));
//        file_put_contents('data.txt', rand(1,100));

    ?>
</div>
</body>
</html>
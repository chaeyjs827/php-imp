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
    <?php echo "Object Handling"; ?>
    <?php

    //Spl => Standard Php Library

        $test_obj = '{"apple":"Fruits", "1":1, "참":true}';
        $parsed_json = json_decode($test_obj);
//        echo $parsed_json;
        var_dump(json_decode($test_obj, true));

    ?>
</div>
</body>
</html>
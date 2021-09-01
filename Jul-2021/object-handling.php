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

        $file = new SplFileObject('data.txt');
        var_dump($file->isFile());
        var_dump($file->isDir());
        var_dump($file->fread($file->getSize()));
        var_dump($file->fwrite(rand(1,100)));
    ?>
</div>
</body>
</html>
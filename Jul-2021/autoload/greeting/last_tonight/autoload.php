<?php
function __autoload($className) {
    include $className.'.php';

    $test = new Logger();
    echo $test->save();
}
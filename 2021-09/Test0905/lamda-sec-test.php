<?php
$msg = 'hello';

$ex = function() {
    var_dump($msg).'<br>';
};
$ex();      // null 출력

// $msg 상속
$ex = function () use ($msg) {
    var_dump($msg).'<br>';
};
$ex();

$msg = 'world';
$ex();
<?php

$testArr = [
    'user' => 'testName'
];
$user = '';

if(!empty($testArr['user'])) {
    echo $testArr['user'].'<br>';
}

if(!empty($testArr['name'])) {
    echo $testArr['name'].'<br>';
} else {
    echo 'name이란 놈은 없소';
}

//$user = $testArr['user'] ?? '오?'; // 시불 7.0이상인데 왜 안되는겨...
<?php


$testArr = [
    'name' => 'tester'
];

$a = isset($testArr['empty']) ? 'not empty' : 'empty';
$b = isset($testArr['name']) ? 'not empty' : 'empty';

$c = empty($testArr['empty']) ? 'empty' : 'not empty';
$d = empty($testArr['empty']) ? 'empty' : 'not empty';



echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
echo $d.'<br>';
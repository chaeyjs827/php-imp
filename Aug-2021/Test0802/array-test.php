<?php
$testArr[0] = 10;
$testArr[1] = 20;
$testArr[2] = 30;

foreach ($testArr as $value) {
    echo $value.'</br>';
}

$testObj['first'] = 'ah!!!';
$testObj['second'] = ['asd', 'asd'];
$testObj['third'] = 10000;

echo json_encode($testObj).'</br>';

$score[0] = 100;
$score[1] = 100;
$score[2] = 100;

$sum = 0;
for($i=0; $i<=3; $i++)
{
    $sum += $score[$i];
}

echo $sum;
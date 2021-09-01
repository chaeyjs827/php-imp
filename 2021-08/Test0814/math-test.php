<?php
$num = 1232345.1232;

// 소수점 함수
echo "대상 수는 $num 입니다.<br />";
echo "1. 세 자리마다 콤마 표시 : ".number_format($num) . "<br />";
echo "2. 세 자리마다 콤마 표시와 소수점 표시 :" .number_format($num,"2",".",","). "<br />";
echo "4. 세 자리마다 @표시와 소수점 표시 #기호 :".number_format($num,"2","#","@").'<br>';

// 절대값 함수
$minus_i = -999;
echo '절대 값 : '.abs($minus_i).'<br>';

//소수점 자리 올림, 버림, 반올림
$a = 34.23349;
echo '올림 : '.ceil($a).'<br>';
echo '버림 : '.floor($a).'<br>';
echo '소수 3자리 미만 반올림 : '.round($a,3).'<br>';

// 저수승
$ju_a = 3;
$ju_b = 5;
echo '저수승 : '.pow($ju_a, $ju_b).'<br>';

// 제곱근
$je_a = 144;
echo '제곱근 : '.sqrt($ju_a).'<br>';

// 10진수와 16진수
$dehe_a = 123;
$dehe_b = FF3;

echo '10진수를 16진수로 : '.dechex($dehe_a).'<br>';
echo '16진수를 10진수로 : '.hexdec($dehe_b).'<br>';
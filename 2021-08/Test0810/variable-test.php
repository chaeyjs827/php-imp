<?php
$test = 'hello~';

echo gettype($test).'<br>';

$bInt = '123';
echo $bInt.'<br>';
$bInt = settype($bInt, "integer");
echo gettype($bInt).'<br>';
echo $bInt.'<br>';

// strval : 문자형 값으로 반환
$a = 33;
$b = strval($a);
echo gettype($b).'<br>';

// intval : 정수형 값으로 변환
$int1 = 33.333;
echo intval($int1).'<br>';


// isset : 변수의 존재 유무를 확인, 선언되지 않았거나 null 이면 아예 아무것도 반환 하지 않음. 값이 있을때만 1 반환
$jsj = null;
echo isset($jsj).'<br>';

// unset : 변수를 삭제함
$valid_var = 123123;
echo isset($valid_var).'<br>';
unset($valid_var);
echo isset($valid_var).'<br>';
//echo $valid_var; // 아예 삭제된 변수라 참조 할 수 없음

// empty : 변수에 값이 존재하지 않으면 true 반환
// null 과 ''는 모두 비어 있는 값이라 true를 반환 함
//$empty_test = '';
$empty_test = null;
//$empty_test = 1;
echo 'empty : '.empty($empty_test).'<br>';;

// is_array : 배열인지 확인하는 함수
$array_test = array(1, 2, 3);
$array_test = 1;
echo 'is_array : '.is_array($array_test).'<br>';

// is_double : 변수형이 double(소수형)이면 true, 아니면 false 반환
//$double_test = 1.2123;
$double_test = 1;
echo is_double($double_test).'<br>';

// is_null : 변수가 null인지 확인
// null 일때는 true, ''에는 false 반환
$null_test = null;
$null_test = '';
echo 'null test : '.is_null($null_test).'<br>';


// is_object : 변수가 비었는지 확인
class TestForIsObject {

}
$testForIsObj = new TestForIsObject();
echo 'is_object : '.is_object($testForIsObj).'<br>';
$testNullObj = null;
echo 'is_object : '.is_object($testNullObj).'<br>';

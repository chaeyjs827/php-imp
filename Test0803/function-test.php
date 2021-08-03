<?php

class FunctionTest {

    public static function test($phoneNumber) {
        $pn_length = strlen($phoneNumber);
        echo $pn_length.'<br>';
    }

    public static function testSubStr($str) {
        $str1 = substr($str, 0, 5);
        $str2 = substr($str, 0, strlen($str)-1);

        echo $str1.'</br>';
        echo $str2.'</br>';
    }

    public static function testStrSplit($str) {
        $userObj = explode("-", $str);
//        echo $userObj;
        foreach($userObj as $key) {
            echo $key.'</br>';
        }
    }
}

FunctionTest::test('010-5354-3245');
FunctionTest::testSubStr('ah, 진짜 그만 ㅠㅠ');
FunctionTest::testStrSplit('test-haha-hoho');
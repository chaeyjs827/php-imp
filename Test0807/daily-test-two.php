<?php

class DailyTest {


    public static function test($i) {
        $str = ($i > 100) ? '좀 큰데?' : '형편 없군';
        echo $str.'<br>';
    }

    public static function evenOdd($i) {
        $str = ($i % 2 == 0) ? '짝수' : '홀수';
        echo $str.'<br>';
    }
}

DailyTest::test(110);
DailyTest::evenOdd(110);


<?php

class DateTest {

    public static function test() {
        $today1 = date('Y년 n월 j일 D요일');
        $today2 = date('l/d/F/Y');

        echo $today1.'<br>';
        echo $today2.'<br>';

        $now = date('h시 i분 s초');
        echo $now.'<br>';

        $cnt = date('z');
        $tocnt = $cnt + 1;
        echo $tocnt.'<br>';

        $mon = date('n');
        $mck = date('t');

        echo '이번 달 {$mon}.월은 {$mck}.일 남았습니다.';
    }


}

DateTest::test();


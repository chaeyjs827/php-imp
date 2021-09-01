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

        echo "이번 달 {$mon}.월은 {$mck}.일 남았습니다.";
        echo '이번 달 {$mon}.월은 {$mck}.일 남았습니다.';


        $a = time(); // 1970년 1월 1일부터 현재까지 지난 시간이 a값이다.
        $b = mktime(5, 10, 20, 5, 3, 2000); // 현재 설정한 시간
        $c = $a - $b; // 1970년부터 지금까지 흐른 시간 에서 1970년부터 200년 5월 3일 5시 10분 20초까지의 시간을 뺀다.
        $d = intval($c / 86400); //  c의 시간을 하루로 나눈다.

        echo "1970년 1월 1일 00:00:00 기준 <br />";

        echo "현재까지 {$a}초가 지났으며, <br />";
        echo "당신의 생일까지 {$d}일 지났습니다. <br />";
    }


}

DateTest::test();


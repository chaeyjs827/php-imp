<?php

const MIN_NUM = 0;
const MAX_NUM = 100;

echo MAX_NUM.'<br>';
echo MIN_NUM.'<br>';

//MIN_NUM = 1000; // 재정의는 가능 하지만 값을 변경 할 순 없음
const MIN_NUM = 1;
echo MIN_NUM.'<br>';

function test() {
    echo 'test : '.MIN_NUM.'<br>';
}

test();

class ConstTest {
    const HUNGRY = 100;

    function test() {
        echo 'ConstTest : '.self::HUNGRY.'<br>';
    }
}

$t = new ConstTest();
$t->test();
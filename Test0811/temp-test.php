<?php
class LoggerTest {
    public static function tempLog($saveParam, $logId) {
        if(is_null($logId)) {
            echo 'logId가 null 이라서 insert문 실행';
        } else {
            echo 'logId가 null 이 아니라서 update문 실행';
            return 100;
        }
    }
}

$test = LoggerTest::tempLog(null,   null);
echo '<br>test : '.$test;
echo '<br>타입은?'.gettype($test);
echo '<br>'.is_null($test);
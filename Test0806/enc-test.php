<?php

class ArrayEncodingTest {

    public static function test() {
//        $str = 'this is utf-8';         // 이게 왜 ascii지...?
//        $str = 'res_msg=����ó��&';  // UTF-8
        $str = 'CKM&acqu_name=KB����ī��, 0';

        $encode = array('ASCII', 'UTF-8', 'EUC-KR');
        $str_encode = mb_detect_encoding($str, $encode);

//        echo '<br>'.mb_detect_encoding($str, 'EUC-KR, UTF-8');
//        echo '<br>'.mb_detect_encoding($str, 'auto');
//        echo '<br>'.mb_detect_encoding($str, array('EUC-KR','UTF-8'));

        echo '<br>'.$str_encode;

    }
}

echo ArrayEncodingTest::test();
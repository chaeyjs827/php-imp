<?php

class ArrayEncodingTest {

    public static function test() {
//        $str = 'this is utf-8';         // 이게 왜 ascii지...?
//        $str = 'res_msg=����ó��&';  // UTF-8
//        $str = '��-��m';    // Base64
        $str = 'hahahahahaha';  // euc-kr

//        $str = 'CKM&acqu_name=KB����ī��, 0';

        $encode = array('ASCII', 'UTF-8', 'EUC-KR', 'Base64');
        $str_encode = mb_detect_encoding($str, $encode);

//        echo '<br>'.mb_detect_encoding($str, 'EUC-KR, UTF-8');
//        echo '<br>'.mb_detect_encoding($str, 'auto');
//        echo '<br>'.mb_detect_encoding($str, array('EUC-KR','UTF-8'));

        echo '<br>'.$str_encode;
    }

    public static function encToEnc() {
        $str = 'test test';
        echo '<br>'.iconv('EUC-KR', 'UTF-8', $str);
        echo '<br>'.iconv('UTF-8', 'EUC-KR', $str);
//        $saveData['req_body'] = json_encode([
//            iconv("EUC-KR", "UTF-8",$payPlus->getModxData())
//        ]);
    }
}

echo DateTest::test();
echo DateTest::encToEnc();
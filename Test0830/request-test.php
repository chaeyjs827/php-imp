<?php

use App\Libraries\Log\Logger;

class RequestTest {

    public static function mainMethod($url) {
        echo self::request('GET', $url);
    }

    public static function request($method, $url, $data = false) {

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
//        curl_setopt($curl, CURLOPT_TIMEOUT, 1);

        $result = curl_exec($curl);

        if($result == false) {
            echo 'time-out error발생인디';
        } else {
            return json_encode($result);
        }
    }


}

//echo RequestTest::mainMethod('common-rest.sweettracker.net/tracking?t_key=o1SqrQ1rTDPNcHeGW1pslg&t_code=CJGLS&t_invoice=111111111111');
echo RequestTest::mainMethod('https://jsonplaceholder.typicode.com/posts');
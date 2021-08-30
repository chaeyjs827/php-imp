<?php

use App\Libraries\Log\Logger;

class RequestTest {

    public static function mainMethod($url) {
        echo self::request('GET', $url);
    }

    public static function request($method, $url, $data = false) {

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);

        $result = curl_exec($curl);

        return json_encode($result);

    }


}

echo RequestTest::mainMethod('https://jsonplaceholder.typicode.com/posts');
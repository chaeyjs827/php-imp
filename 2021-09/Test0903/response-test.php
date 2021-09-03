<?php

//use GuzzleHttp\Psr7\Request;

class ResponseTest {

    public static function mainMethod() {
        self::request();
    }

    public static function request() {
        $reqType = 'GET';
//        $reqUrl = 'apis.data.go.kr/B090041/openapi/service/SpcdeInfoService/getHoliDeInfo?solYear=2021&solMonth=9&ServiceKey=MTMZpTOJODDsu5bJ2WmX5xiuChSTOKvv%2BZgzi9qxCvmqEILaO5eGcTUMYYI3RidIs9lhH6MDbj1LWBMeJ0Tzmw%3D%3D';
//        $reqUrl = 'https://sdfsdfsdfasdo.com';
//        $reqUrl = 'my.dev.musinsa.com/api/oauth/v1/authority/SOLDOUT';
        $reqUrl = 'sdf';
        $headers = [
            "Content-Type"=>"application\/json"
        ];
        $params = '';
//
//        $request = new Request($reqType, $reqUrl, $headers, $params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $reqUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

//        echo $response->getCode();
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);

        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        echo 'header_size : '.$header_size.'<br>';
        echo 'header : '.$header.'<br>';
        echo 'body : '.$body.'<br>';
        echo 'httpStatus : '.$httpStatus.'<br>';
        echo gettype($httpStatus);

        curl_close($ch);
    }


}

ResponseTest::mainMethod();
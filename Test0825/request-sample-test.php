<?php
class RequestApi {
    public function request($reqUrl, $reqHeader, $reqType, $params) {
        // 비지니스 로직 생략
        $result = $reqUrl.':'.$reqHeader.':'.$reqType.':'.$params;
        return $result;
    }

    public function requestWithLog($reqUrl, $reqHeader, $reqType, $params) {
        $result = self::request($reqUrl, $reqHeader, $reqType, $params);
        echo $result;
    }
}

$reqObj = new RequestApi;
$reqObj->requestWithLog('https://www.hello.com', 'header-test', 'POST', 'params');
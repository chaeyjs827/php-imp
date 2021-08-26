<?php
class UtilConvertor {

    public static function main() {
        $response = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><response><header><resultCode>00</resultCode><resultMsg>NORMAL SERVICE.</resultMsg></header><body><items/><numOfRows>10</numOfRows><pageNo>1</pageNo><totalCount>0</totalCount></body></response>';

        $result = self::convertXmlToJson($response);
        echo json_encode($result);
    }

    private static function convertXmlToJson($response) {
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        return json_decode($json, true);
    }

}

UtilConvertor::main();
<?php

class Test {
    public static function getUrl($url) {
        $parsedUrl = parse_url($url);
        $returnUrl = $url;
        echo json_encode($parsedUrl).'<br>';
        if($parsedUrl['scheme'] === 'http') {
            $returnUrl = substr($url, 7,strlen($url));
        } else if($parsedUrl['scheme'] === 'https') {
            $returnUrl = substr($url, 8,strlen($url));
        }
        return $returnUrl;
    }
}

$url = Test::getUrl('http://www.haha.com');
$url = Test::getUrl('test.haha.com');
$url = Test::getUrl('www.test.haha.com');
echo "결과 : {$url}";
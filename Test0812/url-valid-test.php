<?php
$url = 'https://new.land.naver.com/complexes/114900?ms=37.4871204,127.0741687,15&a=APT:OPST&b=B1&e=RETAIL&g=25000&articleNo=2120821885';

//$checkUrl = filter_var($url, FILTER_VALIDE_URL);

//echo $checkUrl;
echo substr($url, 5).'<br>';
echo strpos($url, 'h').'<br>';
//$prefix = substr('https', 5);
//echo $prefix.'<br>';

echo strpos($url, 'https:').'<br>';

if($url) {
//    strcmp($str1, $str2);
}
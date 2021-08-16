<?php

$browserAgent =  $_SERVER['HTTP_USER_AGENT'];

echo $_SERVER['HTTP_USER_AGENT'].'<br>';;

echo $browserAgent.'<br>';


if(strpos($browserAgent, 'iPhone') == true) {
    echo "이 기기는 아이폰입니다.";
} else if(strpos($browserAgent, 'iPad') == true){
    echo "이 기기는 아이패드입니다.";
} else if(strpos($browserAgent, 'Macintosh') == true){
    echo "이 기기는 맥입니다.";
}
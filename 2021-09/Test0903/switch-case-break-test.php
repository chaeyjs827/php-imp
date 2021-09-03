<?php


function test() {
    $isTest = true;

    switch($isTest) {
        case true :
            echo 'test 맞다';
            break;
        case false :
            echo ' test 아니다';
            break;
        case 'test' :
            echo ' 어 이게 되네';
            break;
    }
}

test();

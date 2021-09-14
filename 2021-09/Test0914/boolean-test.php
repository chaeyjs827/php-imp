<?php

function test() {

    $isTestOne = 1;
    $isTestChar = "test";
    $isTestEmpty = " ";
    $isTestNull = null;

    if($isTestOne) {
        echo '$isTestOne참<br>';
    } else {
        echo '흠 1<br>';
    }
    if($isTestChar) {
        echo 'isTestChar<br>';
    } else {
        echo '흠 2<br>';
    }
    if($isTestEmpty) {
        echo 'isTestEmpty<br>';
    } else {
        echo '흠 3<br>';
    }
    if($isTestNull) {
        echo 'isTestNull<br>';
    } else {
        echo '흠 4<br>';
    }

}

test();
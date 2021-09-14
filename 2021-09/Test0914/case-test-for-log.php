<?php

function test() {
    $isInsert = " ";    // true!!
//    $isInsert = false;    // false!!
//    $isInsert = true;     // true!!

    switch($isInsert) {
        case true :
            echo 'true!!'; break;
        case false :
            echo 'false!!'; break;
    }
}

test();
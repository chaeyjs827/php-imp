<?php

// ?? 연산자
function test() {
    $test_arr = [
        'name' => null,
        'age' => 100
    ];

    echo 'isset 을 이용하면? -> name : '.isset($test_arr['name']).'<br>';
    echo 'isset 을 이용하면? -> age : '.isset($test_arr['age']).'<br>';

    echo '---<br>';

    echo var_dump($test_arr['name']).'<br>';
    echo var_dump($test_arr['age']).'<br>';
//    echo 'var_dump 을 이용하면? -> age : '.var_dump($test_arr['age]']).'<br>';

    echo '---<br>';

    echo $test_arr[0].'<br>';
    echo $test_arr[1].'<br>';

    echo '---<br>';

    $test_arr['email'] = '';
    $test_arr['address'] = ' ';

    echo 'isset 을 이용하면? -> email : '.isset($test_arr['email']).'<br>';
    echo 'isset 을 이용하면? -> address : '.isset($test_arr['address']).'<br>';

    // isset은 null만 아니면 true 를 반환 하는구먼
//    echo $test_arr['name'] ?? echo 'hello' : echo 'bye';

}

test();

<?php
// require_once 'greeting.php';
function autoloader($path) {
//    var_dump('here');
    $path = $path.'.php';
    var_dump("path : {$path}");
    require_once $path;
}

spl_autoload_register('autoloader');
//new Hi();
new greeting(); // -> $path=TodayIsToHot.
/*
 * spl_autoload_register() 함수를 실행하면서 어떠한 특정한 함수의 이름을 주고 실행하면
 * php는 그 함수의 이름을 기억하고 있다가 그 특정 클래스를 인스턴스화 할 때 해당 클래스가 존재하지 않는다면
 * autoload 함수명을 참조함
 */


/*
 * php는 Hi 라는 클래스가 정의가 없는 경우 spl_autoload_register() 함수를 사용해서
 * 함수가 실행될때 전달된 함수 이름에 해당되는 함수를 호출하도록 개발됨
 */
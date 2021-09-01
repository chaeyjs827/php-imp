<?php
class ModifierTest {
    public $public_var_empty;
    public $public_var = 100;
    protected $protected_var_empty;
    protected $protected_var = 999;
    private $private_var_empty;
    private $private_var = 777;

    private function private_function() {

    }

    public function public_function() {

    }

    protected function protected_function() {

    }

}

class MainModifierTest {
    function test() {
        $m = new ModifierTest();
        $p1 = $m->public_var;
//        $p2 = $m->private_var; //private은 클래스 내부에서만 사용 할 수 있기 때문에 사용 못 함
//        $p3 = $m->$protected_var; // 클래스 외부이며 상속을 받지 않았기 때문에 사용 못 함

    }
}
<?php
class ConstructTest {
//    private $a;
//    private $b;
//    private $c;
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
}

$test = new ConstructTest(1,2,3);
//echo $test;
echo json_encode($test);
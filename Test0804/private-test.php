<?php

namespace Test\August\Fouth\Lib;

class TestLib {
    private $private_value;
    public $public_value;

    public function __construct($pri_v, $pub_v) {
        $this->private_value = $pri_v;
        $this->public_value = $pub_v;
    }

    public function getPrivateValue() {
        return $this->private_value;
    }
}
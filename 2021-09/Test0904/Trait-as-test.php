<?php

trait KorHello {
    public function sayAnnyeong() {
        return '안녕~<br>';
    }
}

trait EngHello {
    public function sayHello() {
        return 'hello~<br>';
    }
}



class TraitAsTestMain {
    use KorHello, EngHello {
        KorHello::sayAnnyeong insteadof EngHello;
        EngHello::sayHello as sh;
    }
}

$test = new TraitAsTestMain;
echo $test->sayHello();
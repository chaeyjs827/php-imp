<?php

final class FinalClass {

}

class B {
    final function testA() {

    }

    function testB() {

    }

}

// final class인 FinalClass는 상속 받을 수 없음

//class A extends FinalClass {
//
//}

class A extends B {

     public function testB()
     {
         parent::testB(); // TODO: Change the autogenerated stub
     }

 // final method인 testA() 는 오버라이딩 할 수 없습니다.
//     public function testA() {
//
//     }

}
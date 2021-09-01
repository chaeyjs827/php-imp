<?php

class Car
{
    public $wheels;
    public $doors = 4;
    protected $color = 4;
    private $size;
    private $company;

    public function run()
    {
        return "자동차가 달립니다.";
    }

    protected function stop()
    {
        return "자동차가 멈춥니다.";
    }

    protected function turn()
    {
        return "자동차가 회전합니다.";
    }
}

$hyundai = new Car;
$kia = new Car;
$ssang = new Car();
var_dump($hyundai);
echo '<br>';
var_dump($kia);
echo '<br>';
var_dump($ssang);
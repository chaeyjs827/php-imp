<?php
class GoogleCar
{
    public function stateOfTheArtAIDrivingSystem()
    {
        return "구글 AI 드라이빙";
    }
}

class Car extends GoogleCar
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

$honda = new Car;
echo $honda->stateOfTheArtAIDrivingSystem();
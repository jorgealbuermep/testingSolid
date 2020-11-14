<?php

abstract class Pc{
    public $turnedOn;

    abstract public function turnOn();

    public function turnOff(){

        $this->turnedOn=false;
    }
}

class PcAsus extends Pc{
    public $software;

    public function turnOnSoftware(){
        $this->software= true;
    }

    public function turnOn(){
        $this->turnedOn= true;
    }
}

$pc= new PcAsus();
$pc->turnOn();
$pc->turnOnSoftware();
$pc->turnOff();

var_dump($pc);
<?php

interface Pc{
    public function turnOn();
    public function turnOff();
    public function restart();

}

class Imac implements Pc{
    private $model;

    function getModel(){
        return $this->model;
    }

    function setModel($model){
        $this->model= $model;

    }
    public function turnOn(){
        echo"turning on". "<br/>";
    }

    public function turnOff(){
        echo"turned off". "<br/>";
    }

    public function restart(){
        echo "restarting"."<br/>";
    }

}
$imac= new Imac();
$imac->setModel("Mac Book Pro 2019");
 echo $imac->getModel()."<br/>";
$imac->turnOn();
$imac->turnOff();
$imac->restart();
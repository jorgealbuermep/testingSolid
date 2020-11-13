<?php
class Car{


public function __construct($color, $carbrand, $model,$speed){
    $this->color=$color;
    $this->carbrand=$carbrand;
    $this->model=$model;
    $this->speed=$speed;
}

public function getColor(){
    return $this->color;
}

public function setcolor($color){
    $this->color=$color;
}

public function speedUp(){
    $this->speed++;

}

public function getSpeed(){
    return $this->speed;
}
public function showInfo( Car $myobject){
$information="<h2> car information</h2>";
$information .='<br/>color: '.$myobject->color;
$information.='<br/>brand: '.$myobject->carbrand;
$information .='<br/>model: '.$myobject->model;
$information.='<br/>speed: '.$myobject->speed;

return $information;
}
}


$car= new Car("blue","toyota","corolla",120);
 echo $car->getSpeed();
 
 $car2= new Car("red","nissan","sentra",100);
 echo $car2->showInfo($car2);


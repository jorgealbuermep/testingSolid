<?php

trait utilities{
    public function showName(){
        echo "<h2> the name is:" .$this->name."</h2>";
    }
}

class Car{
    public $name;
    public $year;
    use utilities;

}

class Person{
public $name;
public $lastname;
}
 class VideoGame{
public $name;
public $year;
 }

 $car= new Car();
 $car->name="honda civic";
 $car->showName();
 $person= new Person();
 $videogame= new VideoGame();
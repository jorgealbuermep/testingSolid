<?php
//INTERFACE SEGREGATION PRINCIPLE=>Una clase nunca debe ser forzada a implementar una interface que no usa,
// empleando métodos que no tiene por qué usar.
interface ShapeInterface {
    public function area();
    public function volume();
}interface ManageShapeInterface {
    public function calculate();
}
///aplicando interface segregation
interface ManageShapeInterface {
    public function calculate();
}

class Square implements ShapeInterface, ManageShapeInterface {
    public function area() { /*Hacer cálculos*/ }

    public function calculate() {
        return $this->area();
    }
}

class Cube implements ShapeInterface, SolidShapeInterface, ManageShapeInterface {
    public function area() { /*Hacer cálculos*/ }
    public function volume() { /*Hacer cálculos*/ }

    public function calculate() {
        return $this->area() + $this->volume();
    }
}
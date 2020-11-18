<?php
    // OPEN/CLOSE PRINCIPLE->Los objetos o entidades deberían estar abiertas a su extensión, pero cerradas para su modificación.

    class Circle{
        public $radius;
        public function __construct($radius){
            $this->radius= $radius;
        }
    }
    
    class Square{
        public $lenght;
    
        public function __construct($length){
            $this->lenght=$lenght;
        }
    }
    class AreaCalculator{

        protected $shapes;

        public function __construct($shapes = array())
        {
            $this->shapes = $shapes;
        }
        public function sum()
{
    foreach ($this->shapes as $shape) {
        if(is_a($shape, 'Square')){
            $area[] = pow($shape->length, 2);
        } elseif (is_a($shape, 'Circle')){
            $area[] = pi() * pow($shape->radius, 2);
        }
    }
    return array_sum($area);
}
    }
    ////////////aplicando open/close
    interface ShapeInterface {
        public function area();
    }

    Class Circle implements ShapeInterface
{
// ...
}
Class Square implements ShapeInterface
{
// ...
}

public function sum()
{
    foreach ($this->shapes as $shape) {
        if($shape instanceof ShapeInterface)){
            $area[] = $shape->area;
            continue;
        }
        throw new AreaCalculatorInvalidShapeException;
    }

    return array_sum($area);
}
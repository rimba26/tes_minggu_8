<?php
namespace tes;
use tes\Shape;

require "shape.php";

class Square extends Shape
{
    private $side=40;

    public function getArea()
    {
      return pow($this->side,2);  
    }
}
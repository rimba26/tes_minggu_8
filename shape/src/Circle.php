<?php
namespace tes;
use tes\Shape;
class Circle extends Shape
{
    private $radius=28;

    public function getArea()
    {
        return pi()*$this->radius/2;
    }
}
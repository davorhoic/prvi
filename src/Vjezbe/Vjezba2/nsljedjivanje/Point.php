<?php
class Point
{
    private int $x;
    private int $y;
    function __construct(?int $x = 0, ?int $y = 0) // konstruktor
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString() {
        return "[".$this->x.",".$this->y."]";
    }
};

$p1=new Point;

$p2=new Point(7);
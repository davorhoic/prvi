<?php
namespace HDapp;
class Point
{
    // definiramo 2 propertija (private-dostupan samo unutar klase)
    private float $x;
    private float $y;

    // konstruktor funkcija - pridružuje propertijima vrijednost parametara
    function __construct(?float $x = 0, ?float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function GetX(): float
    {
        return $this->x;
    }

    public function GetY(): float
    {
        return $this->y;
    }

    public function __toString()
    {
        return "[" . round($this->x, 2) . "," . round($this->y, 2) . "]";
    }
};

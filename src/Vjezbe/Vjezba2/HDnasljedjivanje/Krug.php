<?php

namespace HDapp;

//include_once "Lik.php";

define('PI', 3.14159);

/**
 * 
 * @param  Point $p središte kruga
 * @param float $r polumjer kruga
 *
 */
class Krug extends Lik
{

    private Point $p; //iskodište
    private float $r; // polumjer

    public function __construct(Point $p, float $r)
    {
        $this->p = $p;
        $this->r = $r;
    }

    public function getPolumjer() {
        return $this->r;
    }
    public function opseg()
    {
        return 2 * $this->r * PI;
    }
    public function povrsina()
    {
        return pow($this->r, 2) * PI;
    }
};

$k1=new Krug(new Point(1,1),4);
echo "Krug k1: povrsina[".round($k1->povrsina(),2)."] - opseg[".round($k1->opseg(),2)."]".PHP_EOL;
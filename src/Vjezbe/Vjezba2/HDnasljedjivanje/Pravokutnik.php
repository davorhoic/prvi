<?php

namespace HDapp;

//include_once "Lik.php";
//include_once "ILik.php";

class Pravokutnik extends Lik implements ILik
{
    protected Point $p1; // donja lijeva tocka
    protected Point $p3; // gornja desna točka
    protected Point $p2; // donja desna tocka
    protected Point $p4; // gornja lijeva točka

    protected Line $diagonala;

    public function __construct(Point $p1, Point $p3)
    {
        $this->p1 = $p1;
        $this->p3 = $p3;
        $this->diagonala = new Line(null, $p1, $p3);
        $this->p2 = new Point($p3->getX(), $p1->getY());
        $this->p4 = new Point($p1->getX(), $p3->getY());
    }
    public function __toString()
    {
        return "Pravokutnik: " . $this->diagonala->kateta_x() . "X" . $this->diagonala->kateta_y()
            . " povrsina:" . round($this->povrsina(), 2)
            . " opseg:" . round($this->opseg(), 2);
    }

    public function opseg()
    {
        return 2 * $this->diagonala->kateta_x() + 2 * $this->diagonala->kateta_y();
    }
    public function povrsina()
    {
        return $this->diagonala->kateta_x() * $this->diagonala->kateta_y();;
    }
    public function getBrojKuteva()
    {
        return  4;
    }
    public function setBrojKuteva($broj)
    {
    }
};

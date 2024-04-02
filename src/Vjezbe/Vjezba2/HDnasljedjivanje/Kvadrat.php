<?php

namespace HDapp;

class Kvadrat extends Pravokutnik{
    function __construct(Point $p1, Point $p2)
    {
        $this->p1 = $p1;
        $this->p2 = $p2;
        $line_a = new Line(null, $p1, $p2);
        $line_b = new Line($p2, $line_a->duljina(),$line_a->kut()+90);
        $this->p3=$line_b->getP2();
        $line_c= new Line( $this->p3, $line_a->duljina(),$line_a->kut()+180);
        $this->p4=$line_c->getP2();
        $this->diagonala=new Line(null, $this->p1, $this->p3);
        
    }
    public function opseg()
    {
        $line_a = new Line(null, $this->p1, $this->p2);
        return 4* $line_a->duljina();  
    }
    public function povrsina()
    {
        $line_a = new Line(null, $this->p1, $this->p2);
        return $line_a->duljina()*$line_a->duljina();  

    }
    public function __toString()
    {
        return "Kvadrat: " . (new Line(null, $this->p1, $this->p2))->duljina() 
        . "X" . (new Line(null, $this->p1, $this->p2))->duljina()
            . " povrsina:" . round($this->povrsina(), 2)
            . " opseg:" . round($this->opseg(), 2)
            . " p1:" . $this->p1
            . " p2:" . $this->p2
            . " p3:" . $this->p3
            . " p4:" . $this->p4;
    }
}

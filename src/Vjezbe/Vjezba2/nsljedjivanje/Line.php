<?php
include "Point.php";

class Line
{

    private Point $p1;
    private Point $p2;

    public function __construct(mixed $param1, mixed $param2)
    {
        //echo get_class($param1);

        if ($param1!=null && get_class($param1)=="Point") {
            $this->p1=$param1;
        }
        if ($param2!=null && get_class($param2)=="Point") {
            $this->p2=$param2;
        }
   
    }
    public function __toString()
    {
        return "Line: t1".$this->p1."---".$this->p2;
    }
}

//$l1 = new Line(); // koordinate [0,0] [0,0]
//$l2 = new Line(1, 45); // linija duljine 1 pod kutom 45°
$l3=new Line(new Point(0,0),new Point(3,4));
echo $l3;

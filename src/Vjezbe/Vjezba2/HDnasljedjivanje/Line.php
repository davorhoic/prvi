<?php
namespace HDapp;
//include_once "Point.php";

class Line
{
    private Point $p1;
    private Point $p2;

    function __construct(?Point $param0, mixed $param1, mixed $param2)
    {
        if ($param0 == null) {
            if (gettype($param1) == "object" && gettype($param2) == "object") {
                $this->p1 = $param1;
                $this->p2 = $param2;
            } else {
                $this->p1 = new Point(0, 0);
                $this->p2 = new Point(
                    $param1 * cos(deg2rad($param2)),
                    $param1 * sin(deg2rad($param2))
                );
            }
        } else {
            $this->p1 = $param0;
            $this->p2 = new Point(
                $this->p1->GetX() + $param1 * cos(deg2rad($param2)),
                $this->p1->GetY() + $param1 * sin(deg2rad($param2))
            );
        }
    }
    public function GetP1(): Point
    {
        return $this->p1;
    }
    public function GetP2(): Point
    {
        return $this->p2;
    }
    public function duljina()
    {
        $delta_x = $this->kateta_x();
        $delta_y = $this->kateta_y();
        return sqrt(pow($delta_x, 2) + pow($delta_y, 2));
    }
    public function kut()
    {
        return $this->kateta_x()==0 ? null : rad2deg(atan($this->kateta_y() / $this->kateta_x()));
    }
    public function kateta_x()
    {
        return $this->p2->GetX() - $this->p1->GetX();
    }
    public function kateta_y()
    {
        return $this->p2->Gety() - $this->p1->Gety();
    }
    public function __toString()
    {
        return "Line: " . $this->p1 . "-" . $this->p2
        . " duljina:" . $this->duljina()
        . " kut:" . round($this->kut(), 2);   
    }
};

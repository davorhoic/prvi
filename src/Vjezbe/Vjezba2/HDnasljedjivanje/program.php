<?php
namespace HDapp;
include "../../../../vendor/autoload.php";

$p1= new Point();
echo "p1:".$p1.PHP_EOL;

$p2= new Point(4.3,1.17);
echo "p2".$p2.PHP_EOL;

$p3= new Point(y:7);
echo "p3".$p3.PHP_EOL;

$l1 = new Line(null, null, null);  // koordinate [0,0][0,0]
$l2 = new Line(null, 10, 45);  // linija duljine 10 pod kutom 45° 
$l4 = new Line(null, 10, 30);  // linija duljine 10 pod kutom 45° 
$l3 = new Line(null, new Point(0, 0), new Point(3, 4));
$l5 = new Line(new Point(3, 3), 10, 30);  // ishodište, duljina i kut 

echo "l1:" . $l1 . PHP_EOL;
echo "l2:" . $l2 . PHP_EOL;
echo "l3:" . $l3 . PHP_EOL;
echo "l4:" . $l4 . PHP_EOL;
echo "l5:" . $l5 . PHP_EOL;

$pravokutnik = new Pravokutnik(new Point(0, 0), new Point(3, 4)); // dvije točke dijagonale, ili jedna linija 
echo $pravokutnik . PHP_EOL;
echo $pravokutnik->getMyVars();

$kvadrat1=new Kvadrat(new Point(0, 0), new Point(4, 0)); // dvije točke jedne stranice
echo $kvadrat1 . PHP_EOL;
echo $kvadrat1->getMyVars();

$kvadrat2=new Kvadrat(new Point(2, 0), new Point(6, 0)); // dvije točke jedne stranice
echo $kvadrat2 . PHP_EOL;
echo $kvadrat2->getMyVars();


$kvadrat2=new Kvadrat(new Point(1, 1), new Point(3, 3)); // dvije točke jedne stranice
echo $kvadrat2 . PHP_EOL;
echo $kvadrat2->getMyVars();
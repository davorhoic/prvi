<?php
$a=10;
$b=&$a;
echo $b;


$a=20;

echo $b;

function dodaj2(&$broj){
    $broj+=2;
    
};

function dodaj3($broj){
    
    return $broj+=2;
};

$a=dodaj3($a);
dodaj2($a);
echo '</br>';
echo "</br>nakon dodaj2 a:".$a;
echo "</br>nakon dodaj2 b:".$b;

;?>
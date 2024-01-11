<?php

echo "<hr>arsort example<hr>";

echo "Sortira obrnutim redom zadržavajući pripadne indekse<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val"."<br>";
}

echo "<hr>array_keys example<hr>";

echo "Vraća sve ili subset indeksa<br>";

$array = array(0 => 100, "color" => "red");
print_r(array_keys($array)); // color

echo "<br>";
$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
echo "<br>";
$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
echo "<br>";
;?>  
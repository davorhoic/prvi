<?php

$trielem=["jabuka", 44, "voce1"=>"jabuka", 1,"broj1"=>3,"1jabuka"];

echo "<pre>";
echo "<hr>nesortirano example<hr>";
print_r($trielem);

echo "<hr>SORT - gubi se asocijacija<hr>";
sort($trielem);
print_r($trielem);

echo "<hr>ASORT - po vrijednostima uzlazno - zadržava keyeve<hr>";
$trielem=["jabuka", 44, "voce1"=>"jabuka", 1,"broj1"=>3,"1jabuka"];
asort($trielem);
print_r($trielem);

echo "<hr>KRSORT - po ključevima silazno<hr>";
$trielem=["jabuka", 44, "voce1"=>"jabuka", 1,"broj1"=>3,"1jabuka"];
krsort($trielem);
print_r($trielem);

echo "<hr>KSORT - po ključevima uzlazno<hr>";
$trielem=["jabuka", 44, "voce1"=>"jabuka", 1,"broj1"=>3,"1jabuka"];
ksort($trielem);
print_r($trielem);

echo "</pre>";
;?>
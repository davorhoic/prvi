<?php
echo "<pre>";

echo "<hr>petlja<hr>";

$niz=array();

for ($i=0;$i<10;$i++) {
    $niz['elem'.$i]=$i*$i;
}

print_r($niz);

foreach ($niz as $key => $value) {
    echo "ključ je:".$key.PHP_EOL;
}

$svevarijable=get_defined_vars();

echo $svevarijable;

$allVarJSON=json_encode($svevarijable,$flags=JSON_PRETTY_PRINT);

echo "</pre>";
echo $allVarJSON;




;?>


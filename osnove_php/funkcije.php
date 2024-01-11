<?php
echo "<pre>";

echo "<hr>FUNKCIJE<hr>";

function pozdravi(){
    return "\nHello";
}

echo pozdravi()." Davor<br>";
echo pozdravi();
echo pozdravi();
echo pozdravi();
echo pozdravi();
echo pozdravi();

function pozdraviJu($ime){
    return "\nHello ".$ime;
}

echo pozdraviJu("Mirna");
;?>


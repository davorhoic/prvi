<?php
/**
 * 
 * Napravi funkciju koja uzima ime i prezime te ih spaja u jedan string s
 * razmakom, nakon toga ih pretvara uvelika slova
 */
echo "<pre>";

echo "<hr>FUNKCIJE<hr>";

function spojiUVelikaSlova(string $ime, string $prezime):string{
    return strtoupper($ime." ".$prezime);
}


$imeVelikoSpojeno=spojiUVelikaSlova("Ivan","Ivanović");

echo $imeVelikoSpojeno;
;?>


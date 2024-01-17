<?php

/** Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). 
 * Funkcija treba konkatenirati podatke iz argumenata 
 * tako da između postoji razmak i dodijeliti ih lokalnoj varijabli, 
 * zatim treba vrijednost u varijabli pretvoriti u velika slova 
 * i to vratiti kao rezultat. */

function SpojiVeliko($name, $surname)
{
    $spojeno = $name . " " . $surname;
    $spojeno = strtoupper($spojeno);
    return $spojeno;
}

$imeIPrezime = SpojiVeliko('Davor', 'Hoić');

echo $imeIPrezime;

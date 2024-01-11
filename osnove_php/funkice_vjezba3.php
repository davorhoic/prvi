<?php
echo "<pre>";

/**
 * ubaci nroj u funkciju, ptibroji lokalnoj varijabli,
 * vrijednost treba biti zadržana
 */

function pribroji($iznos)
{
   static $trenutni_saldo = 0;
   $trenutni_saldo += $iznos;
   return $trenutni_saldo;
}

echo "\nDodaj u saldo: " . pribroji(5);
echo "\nDodaj u saldo: " . pribroji(5);
echo "\nDodaj u saldo: " . pribroji(5);
echo "\nDodaj u saldo: " . pribroji(5);

// deklariraj funkciju kao varijablu

$funkcijaSeZove = 'pribroji';
echo "\nDodaj u saldo: " . $funkcijaSeZove(5);
echo "\nDodaj u saldo: " . $funkcijaSeZove(4);
echo "\nDodaj u saldo: " . $funkcijaSeZove(3);;


<?php

/**Proizvoljno deklarirajte funkciju koja ima jedan argument (number). 
 * Funkcija treba imati lokalnu varijablu u koju će pribrojiti vrijednost argumenta number 
 * te istu vratiti kao rezultat. 
 * Vrijednost treba biti zadržana kod svakog poziva funkcije.
 */

function DodajBroj($number)
{
    static $zbroj;
    return $zbroj += $number;
}

// Deklarirajte funkciju kao varijablu.

$mojaFunkcija = 'DodajBroj';

/**Pozovite funkciju pomoću varijable, 
 * a kao vrijednost argumenta pošaljite 
 * slučajan broj u rasponu od 1 do 10 te ispišite rezultat. */

echo $mojaFunkcija(random_int(1, 10)) . "<br>";

// Ponovite postupak pet puta.
echo $mojaFunkcija(random_int(1, 10)) . "<br>";
echo $mojaFunkcija(random_int(1, 10)) . "<br>";
echo $mojaFunkcija(random_int(1, 10)) . "<br>";
echo $mojaFunkcija(random_int(1, 10)) . "<br>";
echo $mojaFunkcija(random_int(1, 10)) . "<br>";
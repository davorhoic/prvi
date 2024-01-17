<?php

/**
 * 
 * Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.
 * Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.
 * Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.
 * Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c.
 */

$a = 15;
$b = 15;
$c = 5;

if (($a < $b && $b < $c) || ($a > $b && $b > $c)) {
    echo $b . " se nalazi između $a i $c.";
} else {
    echo $b . " nije između $a i $c.";
};
/**
 * Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.
 * Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.
 */

<?php
// Definirajte varijablu names i dodijelite joj niz koji sadrži pet imena.
// Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti.

$names = ['Davor', 'Albina', 'Sanja', 'Maja', 'Ana'];
foreach ($names as $key => $value) {
    echo $key . "->" . $value . " | ";
}

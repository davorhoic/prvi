<?php
/**Definirajte varijablu primeNumbers i 
 * dodijelite joj niz koji sadrži 
 * prvih pet primarnih brojeva. */
$primenumbers = [1,2,3,5,7];

/**Provjerite postoji li u nizu treći element, te 
 * pomoću funkcije var_dump() ispišite rezultat provjere. 
 * Ako je rezultat provjere true, ispišite vrijednost trećeg elementa, 
 * a ako je false ispišite da treći element u nizu ne postoji. */
$rezultat = isset($primenumbers[2]);
var_dump($rezultat);
if ($rezultat) {
    print_r($primenumbers[2]);
} else {
    echo "Treći element u nizu ne postoji!";
};

// Na kraj niza dodajte novu vrijednost, tj. šesti primarni broj.
$primenumbers[] = 11;
echo "<br>".count($primenumbers)."<br>";
var_dump($primenumbers);
echo "<br>";
print_r($primenumbers);

//Sortirajte niz silazno po vrijednostima, te ponovo ispišite cijeli niz.
arsort($primenumbers);
echo "<br>";
print_r($primenumbers);

?>
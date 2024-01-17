<?php
// Definirajte varijablu a i dodijelite joj neku vrijednost. 
// Zatim definirajte varijablu b i referencirajte je na varijablu a. 
// Ispišite varijablu b. 
// Zatim promijenite vrijednost u varijabli a i ponovo ispišite varijablu b.

$a = "Neka vrijednost";
$b = &$a;

echo "<br>Varijabla \$b: $b";

$a = "Nova vrijednost";
echo "<br>Varijabla \$b: $b";
?>
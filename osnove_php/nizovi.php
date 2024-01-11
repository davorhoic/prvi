<?php

$voce=["jabuke", "šljive"];

var_dump($voce);

$voce[]="jagode"; // PAZI OVO! OVAK SE DODAJE!!!
echo "<pre>";
print_r($voce);
echo "</pre>";


/* važne array funkcije
array_chunk
array_combine  uparija keyeve s vrijednostima iz dva posebna arraya
array_fill
array_filter
array_merge
array_unique
array_values
array_push       bolje koristiti array[]="new element"
array_pop

*/
;?>
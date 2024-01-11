<?php
$users=[[
    "ime"=>"Bero",
    "prezime"=>"Jurić",
    "godine"=>"44",
    "spol"=>"M"
],
[
    "ime"=>"Mara",
    "prezime"=>"Marić",
    "godine"=>"67",
    "spol"=>"Ž"],
];

echo "<pre>";
echo "<hr>ASORT - po vrijednostima uzlazno - zadržava keyeve<hr>";

print_r($users);
unset($users[0]["spol"]);
unset($users[1]["spol"]);

print_r($users);
;?>

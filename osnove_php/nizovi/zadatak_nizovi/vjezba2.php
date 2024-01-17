<?php
/**Definirajte varijablu users i 
 * dodijelite joj niz koji sadrži podatke za dva korisnika. 
 * Svaki korisnik mora imati sljedeće podatke: 
 * ime, prezime, godine, spol. (Napomena: višedimenzionalni niz). */
$users = [
    [
        'ime' => 'Davor',
        'prezime' => 'Hoić',
        'godine' => 57,
        'spol' => 'M'
    ],
    [
        'ime' => 'Albina',
        'prezime' => 'Kroflin Hoić',
        'godine' => 45,
        'spol' => 'Ž'
    ]
    ];

print_r($users);
print_r($users[0]['ime']);

unset($users[0]['spol']);
unset($users[1]['spol']);
foreach($users as $k => $v) {
    unset($users[$k]['spol']);
}
print_r($users);

$users[]=[
    'ime' => 'Sanja',
    'prezime' => 'Hoić',
    'godine' => 56,    
];
print_r($users);

?>
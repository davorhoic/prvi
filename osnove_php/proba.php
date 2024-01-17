<?php
// čitanje sadržaja datoteke
$booksJson = file_get_contents('knjige.json');
// prebacivanje u niz
$books = json_decode($booksJson, true);
// Dodavanje novih podataka u niz
$books[] = [
    "title" => "One Hundred Years Of Solitude",
    "author" => "Gabriel Garcia Marquez",
    "available" => false,
    "pages" => 457,
    "isbn" => 9785267006323
];
// Transformiranje u JSON
$booksJson = json_encode($books);
// Zapisivanje novih podataka u datoteku
file_put_contents('knjige.json', $booksJson);

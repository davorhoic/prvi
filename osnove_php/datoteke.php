<?php
//echo "<pre>";

// header
header("Content-Type: application/json");
// čitanje

// print_r($GLOBALS);
$jsonGlobals = json_encode($GLOBALS, JSON_PRETTY_PRINT);

//echo $jsonGlobals;

$file = 'globalne_varijable.json';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "John Smith\n";
// Write the contents back to the file
//file_put_contents($file, $jsonGlobals);

// čitaj

$prositaniFile = file_get_contents(
   $file,
   false,
   null,
   0,
   filesize($file)
);

echo $prositaniFile;

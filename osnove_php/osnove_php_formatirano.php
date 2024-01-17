<?php
// imena varijabli su osjetljiva na velika i mala slova
$ime;
$Ime;

// primjer neispravne definicije varijable
$12ime;
$-ime;
$ ime;

// primjer ispravne definicije varijable
$ime12;
$_ime;
$ime_korisinika;

// dodijeljivanje vrijednosti varijabli
$ime='Marko';

// Imena konstanti trebalo bi pisati velikim slovima
// kako bi ih kasnije u kodu razlikovali

define('PI', 3.14);

// pozitivan dekadski broj
$int_var = 123;
// negativan dekadski broj
$int_var = -123;
// oktalni broj
$int_var = 0123;
// heksadecimalni broj
$int_var = 0x123;

// Realne brojeve možemo pisati na dva načina:
$float_var = 0.123;
// ili
$float_var = 1.123e8;
// Neispravan primjer:
$float_var = 0,123;

// Primjer tekstualnog podatka unutar dvostrukih navodnika
$str = "Ovo je tekstualni podatak";
// Primjer korištenja specijalnih znakova unutar dvostrukih navodnika
$str = "Tekst u prvom redu \n tekst u drugom redu";
// Primjer korištenja varijable unutar dvostrukih navodnika
$num = 9;
$str = "Broj je: $num";

// Primjer bez reference
$a = 5;
$b = $a;
$a = 6;
// Vrijednost $b ostaje nepromijenjena - 5

// Primjer s referencom
$a = 5;
$b = &$a;
$a = 6;
// Vrijednost $b će poprimit novu vrijednost vraijable $a - 6

$a = 5;
// varijabli dodjeljujemo vrijednost 5

$a = 'Algebra - ';
$b = 'PHP ';
$c = 'osnove';

echo $a.$b.$c;

// Inicijalizacija praznog niza
$empty1 = [];
$empty2 = array();

// Inicijalizacija niza (LISTE) s podatcima
$names1 = ['Harry', 'Ron', 'Hermione'];
$names2 = array('Harry, Ron, Hermione');

// Inicijalizacija niza (MAPE) s podatcima
$status1 = [
    'name' => 'James potter',
    'status' => 'dead'
];
$status1 = array(
    'name' => 'James potter',
    'status' => 'dead'
);

// višedimenzionalni niz
$books = [
    '1984' => [
        'author' => 'George Orwell',
        'finished' => true,
        'rate' => 9.5
    ],
    'Romeo and Juliet' => [
        'author' => 'William Shakespeare',
        'finished' => false
    ]
];

// POPULACIJA NIZOVA
// Niz kao lista
$names = ['Harry', 'Ron', 'Hermione'];
// Niz kao mapa
$status = [
    'name' => 'James Potter',
    'status' => 'dead',
    'age' => 24
];
// Dodavanje novog elementa na kraj niza
$names[] = 'Neville';
// Nadjačavanje ključa u nizu
$status['age'] = 32;

print_r($names, $status);

// Uklanjanje elementa iz niza
$status = [
    'name' => 'James Potter',
    'status' => 'dead'
];

unset($stauts['status']);

print_r($status);

// PRISTUP ELEMENTIMA
// Niz kao lista
$names = ['Harry', 'Ron', 'Hermione'];
// Pristup elementu
print_r($names[1]);
// Pristup elementu koji ne postoji
print_r($names[4]);

// Niz kao mapa
$status = [
    'name' => 'James Potter',
    'status' => 'dead',
    'age' => 24
];
// Pristup elementu
print_r($status['name']);
// Pristup elementu koji ne postoji
print_r($status['birthday']);

// empty i isset funkcije
$array =  [];
$names = ['Harry', 'Ron', 'Hermione'];

var_dump(empty($array));    //true
var_dump(empty($names));    //false
var_dump(isset($names[2])); //true
var_dump(isset($names[3])); //true

// TRAŽENJE ELEMENATA
$names = ['Harry', 'Ron', 'Hermione'];

$containsHermione = in_array('Hermione', $names);
var_dump($containsHermione);

$containsSnape = in_array('Snape', $names);
var_dump($containsSnape);

$whereRon = array_search('Ron', $names);
var_dump($whereRon);

$whereVoldemort = array_search('Voldemort', $names);
var_dump($whereVoldemort);

// SORTIRANJE
// Inicijalizacija niza
$properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
];
// dupliciranje niza u nove varijable
$properties1 = $properties2 = $properties3 = $properties;
// sortiranje po vrijednosti uzlazno
// ključevi se resetiraju
sort($properties1);
var_dump($properties1);
// sortiranje po vrijednosti uzlazno
// ZADRĆAVA ključeve
asort($properties2);
var_dump($properties2);
// sortiranje po ključu uzlazno
ksort($properties3);
var_dump($properties3);

echo "\nBefore the conditional.";
if (4>3) {
    echo "\nInside the conditional.";
}
if (3 > 4) {
    echo "\nthis wil not be printed.";
}
echo "\nAfter the conditional.";

if (2 > 3) {
    echo "Inside the conditional.";
} else {
    echo "Inside the else.";
}
if (4 < 5) {
    echo "Not printed";  // izvrši se
} elseif (4 > 4) {
    echo "Not printed";
} elseif (4 == 4) {     // ne izvrši se
    echo "Printed";
} elseif (4 > 2) {
    echo "Not printed";
} else {
    echo "Not printed";
}
if (4 == 4) {
    echo "Printed if";
}

$i = 1;
while ($i < 4) {
    echo $i . " ";
    $i++;
}
echo "<br>" . "with while: ";
$i = 1;
while ($i < 0) {
    echo $i . " ";
    $i++;
}
echo "<br>" . "with do-while: ";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i < 0);

for ($i = 1; $i < 10; $i++) {
    echo $i . " ";
}

// deklariranje funkcije
function writeHello()
{
    return "Hello World!";
}
// pozivanje funkcije
writeHello();
// ispis
echo writeHello();

function addNumbers($a, $b, $printResult = false)
{
    $sum = $a + $b;
    if ($printResult) {
        echo 'The result is ' . $sum;
    }
    return $sum;
}

$sum1 = addNumbers(1, 2);
$sum1 = addNumbers(3, 4, false);
$sum1 = addNumbers(5, 6, true);     // it will print results

// Globalna varijabla
$a = 'Algebra';

function VariableScope()
{
    // lokalna varijabla
    $a = 'Backend developer';
    // ispis lokalne varijable
    echo $a;
}
VariableScope();
// Ispis gobalne varijable
echo $a;

function StaticScope() {
    static $a=0;
    echo $a." ";
    $a++;
}
// Višestruko pozivanje funkcije
StaticScope();
StaticScope();
StaticScope();

// This is wrapper function around echo
function EchoIt($string)
{
    echo $string;
}

$func = 'EchoIt';
$func('test');  // this calls EchoIt

// čitanje sadržaja datoteke
$booksJson = file_get_contents('knjige.json');
print_r($booksJson);
// prebacivanje u niz
$booksArray = json_decode($booksJson, true);
print_r($booksArray);


?>
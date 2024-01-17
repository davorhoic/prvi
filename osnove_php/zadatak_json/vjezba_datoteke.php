<?php
$polazniciJson = file_get_contents('polaznici.json');
$polazniciArray = json_decode($polazniciJson, true);
//print_r($polaznici);
function getTablicaPolaznika($polaznici) {
    $table = '<table border=1>';
    $table .= '<thead>
    <td>Ime</td>
    <td>Prezime</td>
    <td>Godine</td>
    <td>Email</td>
    <td>Telefon</td>
    </thead><tbody>';
    foreach ($polaznici as $polaznik) {
        $table .= "<tr><td>" .
            $polaznik['Ime'] . "</td><td>" .
            $polaznik['Prezime'] . "</td><td>" .
            $polaznik['Godine'] . "</td><td>" .
            $polaznik['Email'] . "</td><td>" .
            $polaznik['Telefon'] . "</td></tr>";
    }
    $table .= "</tbody></table";
    return $table;    
}
echo getTablicaPolaznika($polazniciArray);

echo"<hr>";
$polazniciArray[] = [
    "Ime" => "Zdravko",
    "Prezime" => "Mamić",
    "Godine" => 62,
    "Email" => "zdravko.mamic@gmail.com",
    "Telefon" => 38591666777
];
//print_r($polaznici);
$polazniciJson = json_encode($polazniciArray, JSON_PRETTY_PRINT);
file_put_contents('polaznici.json', $polazniciJson);
$polazniciJson = file_get_contents('polaznici.json');
$polazniciArray = json_decode($polazniciJson, true);
//print_r($polaznici);
echo getTablicaPolaznika($polazniciArray);

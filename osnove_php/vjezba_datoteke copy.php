<?php
$polazniciJson = file_get_contents('polaznici.json');
$polaznici = json_decode($polazniciJson, true);
//print_r($polaznici);
$table = '<table border=1>';
$table .= '<thead>
<td>Ime</td>
<td>Prezime</td>
<td>Godine</td>
<td>Email</td>
<td>Telefon</td>
</thead><tbody>';
foreach ($polaznici as $key => $value) {
    $table .= "<tr><td>" .
        $polaznici[$key]['Ime'] . "</td><td>" .
        $polaznici[$key]['Prezime'] . "</td><td>" .
        $polaznici[$key]['Godine'] . "</td><td>" .
        $polaznici[$key]['Email'] . "</td><td>" .
        $polaznici[$key]['Telefon'] . "</td></tr>";
}
$table .= "</tbody></table";
echo $table;

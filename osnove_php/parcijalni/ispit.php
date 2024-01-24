<?php
$rijeciJson = file_get_contents('words.json');
$rijeciArr = json_decode($rijeciJson, true);
$inputMsg = "Upišite riječ";
//print_r($rijeciArr);

if (isset($_GET['posalji_btn'])) {
    if (empty($_GET['rijec'])) {
        $inputMsg = "Riječ ne može biti prazna!";
    } else {
        // dodaj riječ, prebroji i zapiši u json
        $rijec = trim($_GET['rijec']);
        $brojSlova = PrebrojiSlova($rijec);
        $brojSamoglasnika = prebrojiSamoglasnike($rijec);
        $brojSuglasnika = PrebrojiSuglasnike($brojSlova, $brojSamoglasnika);

        $rijeciArr[] = [
            "rijec" => $rijec,
            "slova" => $brojSlova,
            "samoglasnika" => $brojSamoglasnika,
            "suglasnika" => $brojSuglasnika
        ];

        $rijeciJson = json_encode($rijeciArr, JSON_PRETTY_PRINT);
        file_put_contents('words.json', $rijeciJson);
    }
}

function PrebrojiSlova($word)
{
    $dijakriticki = [
        "č", "ć", "đ", "š", "ž", "Č", "Ć", "Đ", "Š", "Ž",
        "LJ", "Lj", "lj", "NJ", "Nj", "nj", "DŽ","Dž","dž"
    ];
    $counter = 0;
    foreach ($dijakriticki as $slovo) {
        $counter += substr_count($word, $slovo);
    }
    return strlen($word) - $counter;
}
function prebrojiSamoglasnike($word)
{
    $samoglasnici = ["a", "e", "i", "o", "u"];
    $counter = 0;
    foreach ($samoglasnici as $samoglasnik) {
        $counter += substr_count(strtolower($word), $samoglasnik);
    }
    return $counter;
}
function PrebrojiSuglasnike($brojSlova, $brojSamoglasnika)
{
    return $brojSlova - $brojSamoglasnika;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ispit.css">
    <title>Parcijalni ispit - osnove PHP</title>
</head>

<body>
    <div class="float-container">
        <div class="float-child">
            <form action="#" method="get">
                <label for="rijec"><?= $inputMsg ?></label>
                <input type="text" name="rijec">
                <input type="submit" name="posalji_btn" value="Pošalji">
            </form>
            <a href="ispit.php">Početak</a>
        </div>
        <div class="float-child">
            <table>
                <thead>
                    <th>Riječ</th>
                    <th>Broj slova</th>
                    <th>Broj suglasnika</th>
                    <th>Broj samoglasnika</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($rijeciArr as $rijec) {
                        echo "<tr>" .
                            "<td>" . $rijec['rijec'] . "</td>" .
                            "<td>" . $rijec['slova'] . "</td>" .
                            "<td>" . $rijec['suglasnika'] . "</td>" .
                            "<td>" . $rijec['samoglasnika'] . "</td>" .
                            "</tr>";
                    }; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
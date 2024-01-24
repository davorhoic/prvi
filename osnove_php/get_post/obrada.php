<?php
$submitted = !empty($_POST);
print_r($_POST);
echo "<BR>";
print_r((int)$submitted);

if ($submitted) {
    if ($_POST['ime'] == "") {
        echo "Polje \"Ime\" nema podataka!";
    } else {
        echo "Ime: " . $_POST['ime'] . "<br>";
    }
    if ($_POST['prezime'] == "") {
        echo "Polje \"Prezime\" nema podataka!";
    } else {
        echo "Prezime: " . $_POST['prezime'] . "<br>";
    }
} else {
    echo "Nema podataka za obradu";
}

?>

<a href="obrazac.php">Povratak</a>
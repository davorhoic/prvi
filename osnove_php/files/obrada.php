<?php
// Provjerite je li datoteka poslana
if (!isset($_FILES) || empty($_FILES)) {
    echo "Datoteka nije izabrana";
} else {
    // Kreirajte novu mapu u koju ćete pohraniti datoteku
    $basedir = $_SERVER['DOCUMENT_ROOT'] . '/osnove_php/files/';
    $newdir = date('omdHis');
    $uploaddir = $basedir . $newdir;
    mkdir($uploaddir);
    // Provjerite je li poslana datoteka slika
    if (str_contains($_FILES['picture']['type'], 'image')) {
        $uploadfile = $uploaddir . "/" . basename($_FILES['picture']['name']);
        // Pohranite poslanu datoteku.
        move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);
        echo "<div><img src=\"" . $newdir . "/" . basename($_FILES['picture']['name']) .
            "\" width=\"600px\" alt=\"ne može se učitati\"></div>";
    }
}

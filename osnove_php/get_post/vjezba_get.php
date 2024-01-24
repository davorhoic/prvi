<?php
if (isset($_GET) && !empty($_GET)) {
    print_r($_GET);
    foreach ($_GET as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
} else {
    echo "Nema podataka.";
}

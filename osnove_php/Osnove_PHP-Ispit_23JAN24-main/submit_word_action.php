<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet", href="ISPIT-Osnove_PHP.css">
    </head>
</html>

<?php
require("word_functions.php");

if ($_POST["input_word"] == "") {
    echo "<b>WARNING!</b><br><br>
    You must enter a word to analyze!<br>
    Please go back and try again!";
}
elseif (str_contains($_POST["input_word"], " ")) {
    echo "<b>WARNING!</b><br><br>
    White spaces detected in input word!<br>
    Please go back and enter a SINGLE word to analyse!";
}
else {
    add_word_to_json($_POST["input_word"], WORDS_JSON);
    header("Location: index.php");
    exit;
}



<!DOCTYPE HTML>
<head>
    <title>Parcijalni ispit 23JAN24 - Osnove PHP-a</title>
    <meta charset="UTF-8", lang="hr-HR">
    <link rel="stylesheet", href="styles.css">
</head>
<body>
    <h1>-- WORD ANALYSER --</h1>
    <form action="submit_word_action.php" method="POST">
        <label for="input_word">Enter word for analysis!</label><br>
        <input type="text", id="input_word", name="input_word"><br><br>
        <input type="submit" value="Analyse word!">
    </form>
    <hr>
    <table>
        <tr>
            <th>WORD</th>
            <th>LENGTH</th>
            <th># of VOWELS</th>
            <th># of CONSONANTS</th>
        </tr>
        <?php 
            require "word_functions.php";
            echo words_JSON_to_HTML_table(WORDS_JSON);
        ?>
        </tr>
    </table>
</body>
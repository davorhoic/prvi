<?php

define("VOWELS", ["a", "e", "i", "o", "u"]);
define("WORDS_JSON", "23JAN_words.json");

//$vowels = ["a", "e", "i", "o", "u"];

/**
 * Counts number of letters in input word.
 * @param int $word 
 * @return int Number of letters in $word.
 */

function count_letters(string $word): int {
    return strlen($word);
}

/**
 * Counts number of vowels in word.
 * @param string $word 
 * @return int Number of vowels in word.
 */
function count_vowels(string $word): int {
    $vowels_count = 0;
    //$vowels = array("a", "e", "i", "o", "u");
    // Ako ne definiramo samoglasnice kao konstantu joj ne možemo pristupiti
    // ako je izvan funkcije, osim kroz $GLOBALS, ali to nije pametno?
    for ($i = 0; $i < strlen($word); $i++) {
        //if (in_array(strtolower($word[$i]), $GLOBALS["vowels"])) {
        if (in_array(strtolower($word[$i]), VOWELS)) {
            $vowels_count ++;
        }
    }
    return $vowels_count;
}

/**
 * Counts number of consonants in a word.
 * @param string $word
 * @return int Number of consontants in word.
 */
function count_consonants(string $word): int {
    $consonants_count = 0;
    $vowels = array("a", "e", "i", "o", "u");
    for ($i = 0; $i < strlen($word); $i++) {
        if (!in_array(strtolower($word[$i]), $vowels)) {
            $consonants_count ++;
        }
    }
    return $consonants_count;
}

/**
 * Writes a word into a .JSON document.
 * @param string $word Word to be analysed and written down.
 * @param string $file_path File path to .json document.
 * @return void
 */
function add_word_to_json(string $word, string $file_path): void {
    $words = json_decode(file_get_contents($file_path), $associative = true);
    $words[] = array(
        "WORD" =>               $word,
        "LENGTH" =>             count_letters($word),
        "VOWEL_COUNT" =>        count_vowels($word),
        "CONSONANT_COUNT" =>    count_consonants($word)
    );
    file_put_contents($file_path, json_encode($words, JSON_PRETTY_PRINT));

}

/**
 * Reads the .json cotaining analysed words and returns HTML table rows.
 * @param string $file_path File path to .json file containing words.
 * @return string HTML table rows.
 */
function words_JSON_to_HTML_table(string $file_path): string{
    $HTML_string = "";
    $words_JSON = json_decode(file_get_contents($file_path), $associative = true);

    foreach ($words_JSON as $word) {
        $HTML_string .= 
        "<tr>".
            "<td>".$word["WORD"]."</td>".
            "<td>".$word["LENGTH"]."</td>".
            "<td>".$word["VOWEL_COUNT"]."</td>".
            "<td>".$word["CONSONANT_COUNT"]."</td>".
        "</tr>";
    }

    return $HTML_string;
}


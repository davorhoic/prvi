<?php
$cookie_name = "user";
$cookie_value = "John Doe";
// Postavljanje kolačića
setcookie($cookie_name, $cookie_value, time() + (60 * 60 * 24 * 30),"/");
print_r($_COOKIE);
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie named '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
// Za brisanje vrijeme postavite u prošlost
setcookie($cookie_name, "", time() - 10);
print_r($_COOKIE);

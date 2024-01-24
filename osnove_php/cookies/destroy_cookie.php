<?php
$cookie_name = "user";
$cookie_value = "John Doe";

// Za brisanje vrijeme postavite u prošlost
setcookie($cookie_name, "", time() - 10,"/");
print_r($_COOKIE);

<?php
session_start();

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Session varaiables are set.";

echo "Favorite color is: " . $_SESSION["favcolor"];
echo "Favorite animal is: " . $_SESSION["favanimal"];

// remove all session variables
session_unset();

// destroy the session
session_destroy();

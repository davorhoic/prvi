<?php
#require __DIR__ . '../vendor/autoload.php';
require '../vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();

echo 'Hello World, this is a long sentence and I need to make a slug from it!<br>';
echo $slugify->slugify('Hello World, this is a long sentence and I need to make a slug from it!');
echo "<br>";
echo $slugify->slugify('Hello World, this is a long sentence and I need to make a slug from it!','_');
echo "<br>";
echo $slugify->slugify('Hello World, this is a long sentence and I need to make a slug from it!','.');
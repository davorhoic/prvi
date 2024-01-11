<?php
echo "<pre>";

echo "<hr>if(4>3)<hr>";
if (4>3) {
    echo " 4 je veće od 3";
}

echo "<hr>switch<hr>";
$title="breaking bad";
switch ($title) {
    case 'breaking bad':
    case 'die hard':echo "klasik";break;
    case 'mama mia':echo "bljuvotina";break;
    case 'emanuela':echo "ribetina";break;
    default :echo "sapunica";
}


echo "<hr>vježba a=5, b=11m c=15<hr>";
$a=5;
$b=16;
$c=15;

echo "a-b=".abs($a-$b)."<br>";
echo "b-c=".abs($b-$c)."<br>";
echo "a-c=".abs($a-$c)."<br>";


if (abs($a-$b)+abs($b-$c) <= abs($a-$c)) {
    echo "b je između a i c";
}
else {
    echo "nije između";
}
;?>


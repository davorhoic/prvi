<?php
echo "<pre>";

/**
 * Napiši nekoliko funkcija s imaenima boja
 */

 function plava(){
    return "#0000FF"; //rgb(0,0,255) #0000FF
 }
 function crvena(){
    return "#FF0000"; //rgb(0,0,255) #0000FF
 }
 function zelena(){
    return "#00FF00"; //rgb(0,0,255) #0000FF
 }

 // pozpvi zelenu

 $boja="zelena";
echo $boja();

$boja="crvena";
echo $boja();

$boja="plava";
echo $boja();
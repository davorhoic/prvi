<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require '../vendor/autoload.php';

use Carbon\Carbon;

$c=new Carbon();
$c->dayName;
echo $c;
echo $c->dayName;
echo $c->addDays(30);
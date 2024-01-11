<?php
echo "<pre>";
$a='Algebra';

function variableScope(){
    $a='Backend Developer';
    echo "\nFunction: ".$a;
}

echo "\nGlobal: ".$a;

variableScope();
echo $a;

function mojaStaticVar(){
static $brojPoziva=0;
$brojPoziva++;
return $brojPoziva;
};

echo "\nfunkciju maStaticVar broj poziva: ".mojaStaticVar();
echo "\nfunkciju maStaticVar broj poziva: ".mojaStaticVar();
echo "\nfunkciju maStaticVar broj poziva: ".mojaStaticVar();
echo "\nfunkciju maStaticVar broj poziva: ".mojaStaticVar();

function bojajAuto($boja){
    static $zadnjaBoja;
    if($boja!=""){
        $zadnjaBoja=$boja;
    
    };
    return $zadnjaBoja;
}

echo bojajAuto("žuta");
echo bojajAuto("plava");

;?>
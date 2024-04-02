<?php

namespace HDapp;
// include_once "Line.php";

abstract class Lik
{
    abstract public function povrsina();
    abstract public function opseg();
    public function getMyVars()
    {
        $opis = PHP_EOL;
        foreach (get_object_vars($this) as $key => $value) {
            $opis .= $key . " = " . $value . PHP_EOL;
        }
        return $opis;
    }
};

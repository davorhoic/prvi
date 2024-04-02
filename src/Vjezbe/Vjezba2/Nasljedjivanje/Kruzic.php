<?php
// custom autoloader s namespacima?
namespace Nasljedjivanje;

use Stringable;

class Kruzic implements Stringable
{
public function __toString()
{
    return "Proba custom autoloadera";
}
}
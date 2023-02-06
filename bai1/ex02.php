<?php

declare(strict_types=1);

function sum(int|string $a, int|float $b)
{
    return $a + $b;
}

echo sum('10', 0.5), "<br />";

$x = null;
var_dump($x);

$cource1 = "PHP";
$cource2 = "Javascript";
$cource3 = "HTML & CSS";

$cource = array("PHP", "javacript", "HTML & CSS", 123);
echo $cource[1], $cource[2], $cource[0];

echo "<pre>";
print_r($cource);
var_dump($cource);

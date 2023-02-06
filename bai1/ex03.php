<?php

//Khai báo hàm
function greeting()
{
    echo "<h1>Hello world</h1>";
}

greeting();

// $sum = function (...$numbers) {
//     return array_sum($numbers);
// };

function sum(...$numbers)
{
    return array_sum($numbers);
};

$x = 'sum';
if (is_callable($x)) {
    echo $x(1, 2, 3, 4, 5, 6);
} else {
    echo "<h2>Đây không phải là một hàm</h2>";
}


//closure
$array = [1, 2, 3, 4, 5];

function elementX2($element)
{
    return $element * 2;
}

$array2 = array_map(fn ($element) => $element * 2, $array);
echo "<pre>";
print_r($array2);

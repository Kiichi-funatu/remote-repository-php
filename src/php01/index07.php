<?php

function triangle($number1, $number2)
{
    return $number1 * $number2 / 2;
}
function square($number1, $number2)
{
    return $number1 * $number2;
}
function trapezoid($top, $bottom, $height)
{
    return ($top + $bottom) * $height / 2;
}

echo triangle(2, 4) . "<br/>";
echo square(2, 4) . "<br/>";
echo trapezoid(1, 2, 3) . "<br/>";
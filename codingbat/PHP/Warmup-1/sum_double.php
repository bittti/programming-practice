<?php

// 3) Given two int values, return their sum. Unless the two values are the same, then return double their sum.

// sum_double(1, 2) → 3
// sum_double(3, 2) → 5
// sum_double(2, 2) → 8

function sumDouble($a, $b)
{
  return ($a == $b) ? ($a + $b) * 2 : $a + $b;
}

echo "<h1>Sum Double</h1>";
echo sumDouble(1, 2) . " // should be 3 <br/>";
echo sumDouble(3, 2) . " // should be 5 <br/>";
echo sumDouble(2, 2) . " // should be 8";

?>

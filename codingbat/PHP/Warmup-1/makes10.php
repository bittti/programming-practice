<?php

// 6) Given 2 ints, a and b, return True if one if them is 10 or if their sum is 10.

// makes10(9, 10) → True
// makes10(9, 9) → False
// makes10(1, 9) → True

function makes10($a, $b)
{
  return ($a + $b == 10 || ($a == 10 || $b == 10)) ? 'true' : 'false';
}

echo "<h1>Makes 10</h1>";
echo makes10(9, 10) . " // should be `true` <br/>";
echo makes10(9, 9) . " // should be `false` <br/>";
echo makes10(1, 9) . " // should be `true`";

?>

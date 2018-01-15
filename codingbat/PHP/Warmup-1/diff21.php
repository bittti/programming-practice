<?php

// 4) Given an int n, return the absolute difference between n and 21, except return double the absolute difference if n is over 21.

// diff21(19) → 2
// diff21(10) → 11
// diff21(21) → 0

function diff21($n)
{
  echo "21 - " . $n . " // is ";
  return 21 - $n;
}

echo "<h1>Diff21</h1>";
echo "Difference between a int value and 21 <br/><br/>";
echo diff21(19) . "<br/>";
echo diff21(10) . "<br/>";
echo diff21(21) . "<br/>";

?>

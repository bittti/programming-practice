<?php

// 7) Given an int n, return True if it is within 10 of 100 or 200. Note: abs(num) computes the absolute value of a number.

// near_hundred(93) → True
// near_hundred(90) → True
// near_hundred(89) → False

function nearHundred($n)
{
  echo "Number: " . $n . " // ";
  return (abs($n) > 10 && abs($n) < 200) ? 'true' : 'false';
}

echo "<h1>Near Hundred</h1>";
echo "Numbers between 10 and 200 <br/><br/>";
echo nearHundred(99) . "<br/>";
echo nearHundred(90) . "<br/>";
echo nearHundred(207);

?>

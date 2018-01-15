<?php

// 8) Given 2 int values, return True if one is negative and one is positive.
// Except if the parameter "negative" is True, then return True only if both are negative.

// pos_neg(1, -1, False) → True
// pos_neg(-1, 1, False) → True
// pos_neg(-4, -5, True) → True

function posNeg($a, $b, $negative)
{
  $cast_bool = ($negative) ? 'true' : 'false';
  echo "Parameter `a`: " . $a . "<br/>";
  echo "Parameter `b`: " . $b . "<br/>";
  echo "Parameter `negative`: " . $cast_bool . "<br/>";

  if ($a < 0 && $b < 0 && $negative) {
    return 'true';
  }

  if (($a < 0 && $b > 0) || ($a > 0 && $b < 0)) {
    return $negative ? 'false' : 'true';
  }
  return 'false';
}

echo "<h1>Pos Neg</h1>";
echo "Nagative numbers verification <br/><br/>";
echo "answer: " . posNeg(1, -1, false) . "<br/><br/>";
echo "answer: " . posNeg(-1, 1, false) . "<br/><br/>";
echo "answer: " . posNeg(-4, -5, true) . "<br/><br/>";

?>

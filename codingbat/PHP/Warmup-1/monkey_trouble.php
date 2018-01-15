<?php

// 2) We have two monkeys, a and b, and the parameters a_smile and b_smile indicate if each is smiling.
// We are in trouble if they are both smiling or if neither of them is smiling. Return True if we are in trouble.

// monkey_trouble(True, True) → True
// monkey_trouble(False, False) → True
// monkey_trouble(True, False) → False

function monkeyTrouble($aSmile, $bSmile)
{
  return ($aSmile && $bSmile) || (!$aSmile && !$bSmile) ? 'true' : 'false';
}

echo "<h1>Monkey Trouble</h1>";
echo monkeyTrouble(true, true) . " // should be `true` <br/>";
echo monkeyTrouble(false, false) . " // should be `true` <br/>";
echo monkeyTrouble(true, false) . " // should be `false`";

?>

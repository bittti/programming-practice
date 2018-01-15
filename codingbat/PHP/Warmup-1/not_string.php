<?php

// 9) Given a string, return a new string where "not " has been added to the front.
// However, if the string already begins with "not", return the string unchanged.

// not_string('candy') → 'not candy'
// not_string('x') → 'not x'
// not_string('not bad') → 'not bad'

function notString($str)
{
  $str =  strtolower($str);
  $str = str_split($str, 4);
  if ($str[0] == 'not ') {
    return implode($str);
  }
  return "not " . implode($str) . "<br/>";
}

echo "<h1>Not String</h1>";
echo notString('candy');
echo notString('x');
echo notString('not bad');

?>

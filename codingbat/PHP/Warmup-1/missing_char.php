<?php

// 10) Given a non-empty string and an int n, return a new string where the char at index n has been removed.
// The value of n will be a valid index of a char in the original string (i.e. n will be in the range 0..len(str)-1 inclusive).

// missing_char('kitten', 1) → 'ktten'
// missing_char('kitten', 0) → 'itten'
// missing_char('kitten', 4) → 'kittn'

function missingChar($str, $n)
{
  $array = str_split($str);
  unset($array[$n]);
  echo "<br/>Previous word: " . $str . "<br/>";
  $str = implode($array);
  return "New word: " . $str . "<br/>";
}

echo "<h1>Missing Char</h1>";
echo missingChar('kitten', 1);
echo missingChar('kitten', 0);
echo missingChar('kitten', 4);

?>

<?php

// 11) Given a string, return a new string where the first and last chars have been exchanged.

// front_back('code') → 'eodc'
// front_back('a') → 'a'
// front_back('ab') → 'ba'

function frontBack($str)
{
  echo "Input: " . $str . "<br/>";
  $str = str_split($str);
  $temp = $str[0];
  $str[0] = $str[count($str) - 1];
  $str[count($str) - 1] = $temp;
  return "Output: " . implode($str) . "<br/>";
}

echo "<h1>Front Back</h1>";
echo frontBack('code') . "<br/>";
echo frontBack('a') . "<br/>";
echo frontBack('ab');

?>

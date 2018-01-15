<?php

// 12) Given a string, we'll say that the front is the first 3 chars of the string.
// If the string length is less than 3, the front is whatever is there.
// Return a new string which is 3 copies of the front.

// front3('Java') → 'JavJavJav'
// front3('Chocolate') → 'ChoChoCho'
// front3('abc') → 'abcabcabc'

function front3($str)
{
  echo "Input: Java" . "<br/>Answer: ";
  $str = substr($str, 0, 3);
  for($i=0; $i<3; $i++) {
    echo $str;
  }
}

echo "<h1>Front3</h1>";
echo front3('Java') . " // should be `JavJavJav` <br/><br/>";
echo front3('Chocolate') . " // should be `ChoChoCho` <br/><br/>";
echo front3('abc') . " // should be `abcabcabc` <br/><br/>";

?>

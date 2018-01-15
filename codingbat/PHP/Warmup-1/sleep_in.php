<?php

// 1) The parameter weekday is True if it is a weekday, and the parameter vacation is True if we are on vacation.
// We sleep in if it is not a weekday or we're on vacation. Return True if we sleep in.

// sleep_in(False, False) → True
// sleep_in(True, False) → False
// sleep_in(False, True) → True

function sleepIn($weekday, $vacation)
{
  $days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday'
  ];

  if (!in_array(strtolower($weekday), $days)) {
    echo "Wrong day parameter! <br/>";
    return;
  }

  $weekends = ['saturday', 'sunday'];
  $weekday = !in_array(strtolower($weekday), $weekends);

  return !($weekday && !$vacation) ? 'true' : 'false';
}

echo "<h1>Sleep In</h1>";
echo sleepIn('saturday', false) . " // should be `true` <br/>";
echo sleepIn('wednesday', false) . " // should be `false` <br/>";
echo sleepIn('Sunday', true) . " // should be `true`";

?>

<?php

// With an associate array you build a index or key to each value
// with this example below the index/key is on the left hand side
// Ashley, Ryan, Gerry etc. where as their respective values are on
// the right hand side.

$names = array(
    'Ashley' => 'Orange',
    'Ryan' => 'Blue',
    'Gerry' => 'Red'
);

// $names calls the array, Ryan is the key/index, "Blue" will be the
// actual value that will be retrieved and displayed from the array.
echo "$names[Ryan]";

?>
<?php

// An array can be saved into a variable on one line like this:
$names = array('ashley','bob','tim');

// An array can also be spread across multiple lines like this:
$ages = array(
    '25',
    '33',
    '40'
);

// Using [0] pulls the first item from the array
echo "$names[0]";

echo '<br>is<br>'; // Just a line break

// Using [1] pulls the second item from the array
echo "$ages[1]";

// Shows everything within the $names variable/array
var_dump ($names);

?>
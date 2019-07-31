<?php

$vehicles = array('aship', 'car', 'bike', 'boat');

$people = 'Ashley Ryan Steve Alex Gerry';

$individuals = explode ( ' ', $people);

echo "$people";

echo "<br><br>";

echo $individuals[1];

echo "<br><br>";

$grouped = implode (' ', $individuals);

echo "<br><br>";

sort( $vehicles );

print_r ( $vehicles );

?>
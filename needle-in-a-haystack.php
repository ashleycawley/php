<?php

$numbers = array('1', '5', '8', '20', '100');

if ( in_array( '20', $numbers ) ) {
    echo "20 is in the array!";
} else {
    echo "20 is NOT found in the array :-(";
}

echo "<br>";

if ( in_array( '99', $numbers ) ) {
    echo "99 is in the array!";
} else {
    echo "99 is NOT found in the array :-(";
}

?>
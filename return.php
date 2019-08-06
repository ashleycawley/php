<?php

function one_or_zero() {
    $number = rand( 0, 1 );
    echo "Number is: $number";
    if ( $number === 0 ) {
        return 'ZERO';
        echo "This should not display";
    } else {
        return 'ONE';
        echo "This should not display";
    }
}

$result = one_or_zero();

echo "<br>";

echo $result;

?>
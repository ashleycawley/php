<?php

// For Loop

for ( $i = 0; $i < 5; $i++ ) {
    echo "Hi Ashley! $i";
    echo "<br><br>";
}

// Playing around utilising the above For Loop in a scenario whereby
// we are peppering a password.
$password = '45rtgdyhu393';
$key = '45rtgdyhu393';

for ( $i = 0; $key !== 'bdbf5cfe7eab346fb27b86b5597fe0f124739144'; $i++ ) {
    $key = $password . $i;
    echo "The peppered key is: $key";
    $key = sha1($key);
    echo "<br>";
    echo "The peppered key after sha1 is: $key";
    echo "<br><br>";
}

// For Each Loop



// While Loop



?>
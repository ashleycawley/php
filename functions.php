<?php

// Simple function called 'hey' which echos out
// a message.
// Defining the function:
function hey() {
    echo "Hello world!";
}

// Using the function:
hey();

// Practicing passing a parameter into a function
// Setting a name:
$name = 'Ashley';

function say_hi( $name ) {
    echo "Hi there $name how are you doing?";
}

echo "<br><br>";

echo "sha1 of Hello world! :";
echo "<br>";
echo sha1 ('Hello world!');

echo "<br><br>";

echo "String from function:";
echo "<br>";
echo sha1 (hey());

?>
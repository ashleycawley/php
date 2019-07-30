<?php

$user = 'acawley';
$number = 25;

switch ( $user ) {
    case 'jjones':
        echo 'Johnny';
        break;

    case 'jsmith':
        echo 'Mr Smith';
        break;

    // Multiple case statements can be used to group an action together
    // to cover multiple scenarios
    case 'acawley':
    case 'rdevonshire':
        echo 'Hey Sysadmins!';
        break;

    // If none of the above conditions are met than this is the default
    default:
        echo 'Hey Guest!';
}

echo "<br><br>"; // Just adds in a couple of line breaks

switch ( $number ) {
    case 25:
        echo "The number is 25";
        break;
}

?>
<?php
#CONDITIONALS

/*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
*/

$num = '5';

if($num === 5) {
    echo '5 passed<br>';
} elseif($num == 6) {
    echo '6 passed<br>';
} else {
    echo 'did not pass<br>';
}

#NESTING IF

$num1 = 5;

if($num1 > 4) {
    if($num1 < 10) {
        echo "$num1 passed<br>";
    }
}

#LOGICAL OPERATORS

/*

and &&
or ||
xor - 1 HAS to be true, but both CANNOT be true

*/

if($num1 > 4 AND $num1 < 10) {
    echo "$num1 passed<br>";
}

#SWITCH

$favColor = 'red';

switch($favColor){
    case 'red':
        echo "My favorite color is red";
        break;
    case 'blue':
        echo "My favorite color is blue";
        break;
    default:
        echo "Your favorite color is something else";
}
?>
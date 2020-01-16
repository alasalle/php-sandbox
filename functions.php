<?php
# FUNCTIONS - blocks of code that can be repeatedly called
/*
    camelCase - myFunction()
    lowercase - my_function()
    PascalCase - MyFunction() - usually used for classes
*/

function simpleFunction(){
    echo 'Hello World';
    echo '<br>';
}

simpleFunction();

function sayHello($name = 'World'){
    echo "Hello $name! <br>";
}

sayHello('Mike');
sayHello();

function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

echo addNumbers(2, 3);

#By reference - manipulates original value

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($myNum);

echo "value: $myNum<br>";

addTen($myNum);

echo "value: $myNum<br>"
?>
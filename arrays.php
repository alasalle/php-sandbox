<?php
#ARRAYS
/*
    - variable that holds multiple values
        -indexed
        -associative
        -multi-dimensional
*/

#INDEXED ARRAYS

$people = array('Kevin', 'Jeremy', 'Sara');
$cars = ['Honda', 'Toyota', 'Chevy'];
$cars[] = 'BMW';
echo $cars[3];
echo $people[1];
echo count($cars);
print_r($cars); // prints whole array
var_dump($cars); // full info for array and its variables (can be used for any data type)

#ASSOCIATIVE ARRAYS - key and value can be assigned
$people1 = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
$ids = [22 => 'Jose', 44 => 'Brad', 63 => 'William'];

$people1['Jill'] = 42;
echo $people1['Jill'];
print_r($people1);

#MULTIDIMENSIONAL ARRAYS - arrays w/in arrays

$cars1 = array(
    array('Honda', 20, 10),
    array('Toyota', 20, 30),
    array('Ford', 23, 12)
);

echo $cars[1][0];
?>
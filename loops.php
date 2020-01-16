<?php
#LOOPS - execute code set number of times

/*
    For
    While
    Do While
    For Each
*/

#FOR LOOP - used when you know the number of times to be executed
/*
    - @params - initializer, condition, increment
*/

for($i = 1; $i <= 10; $i++){
    echo $i + $i - 1;
    echo '<br>';
}

#WHILE LOOP
# @params - condition

$i1 = 0;

while ($i1 < 10) {
    echo $i1;
    echo '<br>';
    $i1++;
}

#DO WHILE LOOP
# @params - conditon

$i2 = 0;

do{
    echo $i2;
    echo '<br>';
    $i2++;
}

while($i2 < 10);

#FOR EACH LOOP - works w/ arrays

$people = array('Brad', 'Jose', 'William');

foreach($people as $person){
    echo $person;
    echo '<br>';
}

$people1 = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose123@yahoo.com', 'William' => 'wilbur@gmail.com');
foreach($people1 as $person => $email){
    echo "$person: $email";
    echo '<br>';
}
?>
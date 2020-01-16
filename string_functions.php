<?php
// substr() - returns a portion of a string
// $output = substr('Hello', 1, 3);
// echo $output;
// echo "<br";
// $output2 = substr('Hello', -2);
// echo $output2;
// echo "<br>";

#strlen() - returns length of string
$output2 = strlen("Hello World");
echo "$output2<br>";

#strpos() - finds and returns position of 
// first occurence of sub string
$position = strpos('Hello World', 'o');
echo "$position<br>";

#trim() - strips whitespace
$text = 'Hello World                            ';
$trimmed = trim($text);
var_dump($trimmed);

#strtoupper() - everything to uppercase
$upper = strtoupper('Hello World');
echo "<br>$upper<br>";

#strtolower() - everything to lowerase
$lower = strtolower('Hello World');
echo "$lower<br>";

#ucwords() - capitalizes every word
$proper = ucwords('hello world');
echo "$proper<br>";

#str_replace() - replace all occurences of a search
#string w/ a replacement
$replace = 'Hello World';
$replaced = str_replace('World', 'Everyone', $replace);
echo "$replaced<br>";

#is_string() - check if string
$val = "Hello";
$isstring = is_string($val);
echo "$isstring<br>";

$values = [true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0'];
foreach($values as $value){
    if(is_string($value)) {
        echo "{$value} is a string<br>";
    } else {
        echo "{$value} is not a string<br>";
    }
}

#gzcompress() - compress a string

$string = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.";

$compressed = gzcompress($string);
$original = gzuncompress($compressed);
echo $original;
?>
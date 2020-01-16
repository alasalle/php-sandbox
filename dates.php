<?php
#DATES

echo date('d'); //Day
echo '<br>';
echo date('m'); // month
echo '<br>';
echo date('Y'); //year
echo '<br>';
echo date('l'); //day of the weeks
echo '<br>';
echo date('m/d/Y');
echo '<br>';
echo date('Y-m-d');
echo '<br>';
echo date('h'); //hour
echo '<br>';
echo date('i'); //minutes
echo '<br>';
echo date('s'); //seconds
echo '<br>';
echo date('a'); //am or pm
echo '<br>';
echo date('h:i:sa');
echo '<br>';
//set time zone: date_default_timezone_set('America/New_York')
// get time zone: 
echo date_default_timezone_get();
echo '<br>';

#MAKE DATE & TIME
/*
Unix timestamp is long integer containing the num of seconds 
b/w the Unix Epoch (jan 1st 1970 00:00:00 GMT) and the 
time specified.
*/
$timestamp = mktime(19, 48, 30, 2, 12, 1991); //hr, min, secs, month, day, year

echo $timestamp;
echo '<br>';
echo date('m-d-Y h:i:sa', $timestamp);
echo '<br>';

$timestamp2 = strtotime('7:00pm March 22 2016');
echo $timestamp2;
echo '<br>';
echo date('m-d-Y h:i:sa', $timestamp2);
echo '<br>';

$timestamp3 = strtotime('tomorrow');
echo $timestamp3;
echo '<br>';
echo date('m-d-Y h:i:sa', $timestamp3);
echo '<br>';

$timestamp4 = strtotime('+2 Days');
echo $timestamp4;
echo '<br>';
echo date('m-d-Y h:i:sa', $timestamp4);
echo '<br>';
?>
<?php

echo "Task 1 to check the leap year";
echo "<br>";
echo "<br>";



for ($year=2012 ; $year<2030 ; $year++) {
    if ($year%4 == 0) {
        echo "This is a leap year .$year";
        echo "<br>";
    }
    else {
        echo "This is not a leap year";
        echo "<br>";
    }
}
echo "<br>";
echo "Task 2 to check the season";
echo "<br>";
echo "<br>";

$temp = 25 ;

if ($temp>=20){
    echo "The season is summer $temp degree";
    echo "<br>";
}

else {
    echo "The season is winter $temp degree ";
    echo "<br>";
}

echo "<br>";
echo "<br>";

$first_num=12;
$second_num="12";
if ($first_num == $second_num) {
    $sum=$first_num+$second_num;
    echo " The tripple of the sum is ".$sum*3;
}

echo "<br>";

echo "<br>";
echo "Task 4 check if the sum of the two given numbers equals 30";
echo "<br>";


$num1=16;
$num2=14;
if ($num1+$num2==30){
    echo "True the number is 30";
    echo "<br>";
    
}
else {
    echo "False the number is not 30";
}

echo "<br>";
echo "Task 5 check if the given positive number is a multiple of 3";
echo "<br>";

$positive_num = 81;
if ($positive_num%3==0){
    echo "true $positive_num is a multiple of 3";
}
else {
    echo "false $positive_num is not a multiple of 3";
}

echo "<br>";
echo "Task 7 largest number between the three integers";
echo "<br>";

$numbers =[19,82,109];
$max_num=max($numbers);
echo "The max num is $max_num";
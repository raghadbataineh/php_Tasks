<?php
$sum=0;
for ($i=0; $i<=30 ; $i++){
    $sum+=$i ;
}
echo "The total is $sum";
echo "<br>";
echo "<br>";

for ($i=1 ; $i<6 ; $i++) {

    for ($j=1 ; $j<6 ; $j++) {
        if ($i==$j) {
            echo "$i";
            echo " ";
    }
    else {
        echo "0";
        echo " ";
    }
 

}
echo "<br>";
}
echo "<br>";

$number=10;
$factorical=1;

for ($i=1 ; $i<$number ; $i++) {
    $factorical*=$i;
}

echo "The factorial for 10! is $factorical";
echo "<br>";
echo "<br>";

$first_num=0;
// $second_num=1;
$Fibonacci=0;
$summation=0;
for ($i=1 ; $i<10 ; $i++){
    $summation+=$first_num+$i;
    $Fibonacci= $summation+$i;
    echo  $Fibonacci. " , ";

}
echo "<br>";
echo "<br>";


// function fibonacciLoop($n) {
//     $fib = array(0, 1);

//     for ($i = 2; $i < $n; $i++) {
//         $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
//     }

//     return $fib;
// }

// $length = 10; // The number of Fibonacci numbers to generate
// $fibonacciSequence = fibonacciLoop($length);
// echo implode(', ', $fibonacciSequence);


echo "<br>";
echo "<br>";
echo "<br>";

$num=1;
for ($i=1 ; $i<=5 ; $i++){
    for ($j=1 ; $j<=$i ; $j++){
        echo $num . " ";
        $num++;

    }
    echo "<br>";
}

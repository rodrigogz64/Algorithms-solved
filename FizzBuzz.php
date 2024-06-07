<?php
/*
FizzBuzz
Given an integer n, return a string array answer (1-indexed) where:
answer[i] == "FizzBuzz" if i is divisible by 3 and 5.
answer[i] == "Fizz" if i is divisible by 3.
answer[i] == "Buzz" if i is divisible by 5.
answer[i] == i (as a string) if none of the above conditions are true.
*/
//case1
$n = 3;
//case2
//$n = 5;
//case3
//$n = 15;

$i = 1;
echo "[";
while($i <= $n){
    
    if($i % 15 == 0)
        echo '"Fizz Buzz"';
    elseif($i % 3 == 0)
        echo '"Fizz"';
    elseif($i % 5 == 0)
        echo '"Buzz"';
    else
        echo '"'. $i .'",';
    $i++;
}
echo "]";
?>

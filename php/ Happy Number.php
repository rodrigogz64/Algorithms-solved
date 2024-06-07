<?php
/*
Happy Number
Write an algorithm to determine if a number 'n' is happy.

A happy number is a number defined by the following process:
Starting with any positive integer, replace the number by the sum of the squares of its digits.
Repeat the process until the number equals 1 (where it will stay), or it loops endlessly in a cycle which does not include 1.
Those numbers for which this process ends in 1 are happy.
Return true if 'n' is a happy number, and false if not.
*/
//case1
$n = 19;
//case2
//$n = 2;

echo $n;
$numbers = [];

while ($n != 1 && !isset($numbers[$n])) {
    $numbers[$n] = true;
    $digits = str_split($n);
    $sum = 0;

    foreach ($digits as $digit) {
        $sum += pow($digit, 2);
    }

    $n = $sum;
}

$result = $n == 1 ? "true" : "false";
echo "\n" . $result;
?>

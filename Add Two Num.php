<?php
/*
Add Two Num
You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse order, and each of their nodes contains a single digit. Add the two numbers and return the sum as a linked list.

You may assume the two numbers do not contain any leading zero, except the number 0 itself.
*/

//case 1
$l1 = [2,3,4];
$l2 = [5,6,4];
// Output: [7,0,8]
//case 2
//$l1 = [0]; 
//$l2 = [0];
//Output: [0]

//case 3
//$l1 = [9,9,9,9,9,9,9]; 
//$l2 = [9,9,9,9];
//Output: [8,9,9,9,0,0,0,1]


$temporal = [];
$num1 = 0;
$num2 = 0;
for($i=count($l1) - 1; $i >= 0; $i--){
$num1 .= $l1[$i];
$num2 .= $l2[$i];
}

$suma = $num1 + $num2;
$new = strval($suma);
for($i= strlen($new) - 1; $i >= 0; $i--){
$temporal[] = $new[$i];
}
print_r($temporal);
//print_r($l1);
?>

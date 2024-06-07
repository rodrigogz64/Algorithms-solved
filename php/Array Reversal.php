<?php
/*
Array Reversal
Given an array, of size , reverse it.
*/
//case1
$s = ["h","e","l","l","o"];
//case2
//$s = ["H","a","n","n","a","h"];
//case3
//$s = [1,2,3,4,5];

$reverse = [];

for($i = count($s)-1; $i >=0; $i--){
    $reverse[$i] = $s[$i];
    echo $reverse[$i] . " ";
}
?>

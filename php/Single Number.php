<?php
/*
Single Number
Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.

*/
//case1
$nums = [2,2,1];
//case2
//$nums = [4,1,2,1,2];
//case3
//$nums = [1];


$array = [];
$sum = 0;
foreach($nums as $value){
    if(!isset($array[$value])){
        $array[$value] = $value;
    }
}
foreach($array as $value2){$sum += $value2;}
$i = 0;
$sum2 = 0;
while($i < count($nums)){
    $sum2 += $nums[$i];
    $i++;
}

echo abs((2 * $sum) - ($sum2));

?>


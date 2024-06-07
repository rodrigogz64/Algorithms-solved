<?php
/*
Two Sum
Given an array of integers nums and an integer target, return the indices of the two numbers such that they add up to the target. You may assume that each input would have exactly one solution, and you may not use the same element twice. You can return the answer in any order.
*/
//case 1
$nums = [2,7,11,15];
$target = 9;
//case 2
//$nums = [3,2,4];
//$target = 6;
//case 3
//$nums = [3,3];
//$target = 6;


$i = 0;
$j = 1;
$sum = 0;
$result = "";

while($j < count($nums)){
    $sum = $nums[$i] + $nums[$j];
    if($sum == $target){
        $result = $i . "," . $j;
        break;
    }
    $i++;
    $j++;
}

echo "Taget: " . $sum . "\nPosition: [";
echo $result . "]";

?>

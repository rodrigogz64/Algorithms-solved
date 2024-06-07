<?php
/*
Contains Duplicate
Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.
*/

//case1
$nums = [1,2,3,1];
//case2
//$nums = [1,2,3,4]
//case3
//$nums = [1,1,1,3,3,4,3,2,4,2]
$array = [];
$cont = 0;
$result = "";

foreach($nums as $value){
    if(isset($array[$value])){
        $array[$value]++;
    }else{
        $array[$value] = 1;
    }
}
foreach($array as $value){
    if($value > 1)
        $cont++; 
}

if($cont >= 1){
    $result = "true";
}else{
    $result = "false";
}
echo $result;
?>

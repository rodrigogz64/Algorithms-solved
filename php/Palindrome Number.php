<?php
/*
Palindrome Number
Given an integer x, return true if x is a palindrome, and false otherwise.
*/

//case1
$x = 121;
//case2
//$x = -121;
//case3
//$x = 10;
$array = [];
$new_x = strval($x);

for($i = strlen($x)-1; $i >= 0; $i--){
    $array[$i] = $new_x[$i];
}

$result;
$new_array = implode($array);
if($new_x == $new_array){
    $result = "true";
}else{
    $result = "false";
}
echo $result;
?>

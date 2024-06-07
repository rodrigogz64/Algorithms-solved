<?php
/*
Count Inversions
Given an array of integers. Find the Inversion Count in the array. 

Inversion Count: For an array, inversion count indicates how far (or close) the array is from being sorted. If the array is already sorted then the inversion count is 0.
If an array is sorted in the reverse order then the inversion count is the maximum. 
Formally, two elements a[i] and a[j] form an inversion if a[i] > a[j] and i < j.
*/

//case1
$heights = [1,1,4,2,1,3];
//case2
//$heights = [5,1,2,3,4];
//case3
//$heights = [1,2,3,4,5];

function ordenado($heights){
	for($i = 0; $i < count($heights); $i++){
		for($j = $i+1; $j < count($heights); $j++){
			if($heights[$j] < $heights[$i]){
				$temporal = $heights[$i];
				$heights[$i] = $heights[$j];
				$heights[$j] = $temporal;
			}
		}
	}
	return($heights);
}

print_r(ordenado($heights));

$cont = 0;
for($i = 0; $i < count($heights); $i++){
    if($heights[$i] != ordenado($heights)[$i]) {
        $cont++;
    }
}
echo $cont;
?>

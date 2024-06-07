/*
Instructions

Implement the method filterDuplicates(data) that takes a data array as input and returns an array containing the values of data without the duplicates.

The initial order of the values must be kept.

Example: {7 6 4 3 3 4 9} => {76439}

Constraints:

data is never null
*/

import java.util.*;

class Solution {
    public static int[] filterDuplicates(int[] data) {
        Set<Integer> set = new LinkedHashSet<>();

        for (int num : data) { set.add(num); }
        int[] result = new int[set.size()];
        int index = 0;

        for (int num : set) { result[index++] = num;}
        
        return result;
    }

    public static void main(String[] args) {
        int[] data = {7,6,4,3,3,4,9};
        int[] filteredData = filterDuplicates(data);

        for (int num : filteredData) {
            System.out.print(num + " ");
        }
    }
}


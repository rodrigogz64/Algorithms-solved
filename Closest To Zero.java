/*
In this exercise, you have to analyze records of temperature to find the closest to zero.

Implement the method int computeClosestToZero(int[] ts) which takes an array of temperatures [ts and returns the temperature closest to 0.

Constraints:

If the array is empty, the method should return 0

Osts size s 10000

If two temperatures are equally close to zero, the positive temperature must be returned. For example, if the input is-5 and 5, then 5 must be returned.
*/


import java.util.*;

class Solution {
    public static int computeClosestToZero(int[] temperatures) {
        if (temperatures.length == 0) { return 0; }

        int closestTemperature = temperatures[0];
        
        for (int i = 1; i < temperatures.length; i++) {
            int currentDistance = Math.abs(temperatures[i]);
            int closestDistance = Math.abs(closestTemperature);
            
            if (currentDistance < closestDistance || (currentDistance == closestDistance && temperatures[i] > closestTemperature)) {
                closestTemperature = temperatures[i];
            }
        }
        
        return closestTemperature;
    }
}




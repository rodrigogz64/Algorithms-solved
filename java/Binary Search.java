/*
The aim of this exercise is to check the presence of a number in an array.

Specifications:

* The items are integers arranged in ascending order

The array can contain up to 1 million items

* The array is never null

Implement the method boolean A.exists(int[] ints, int k)] so that it returns true if belongs to [ints, otherwise, the method should return false

Important note: Try to save CPU cycles if possible.
*/
import java.util.Arrays;

class A {
    static boolean exists(int[] ints, int k) {
        int left = 0;
        int right = ints.length - 1;

        while (left <= right) {
            int mid = left + (right - left) / 2;

            if (ints[mid] == k) { return true; } 
            else if (ints[mid] < k) { left = mid + 1; } 
            else { right = mid - 1; }
        }

        return false;
    }

    public static void main(String[] args) {
        int[] ints = {-9, 14, 37, 102};

        System.out.println(A.exists(ints, 102)); // true
        System.out.println(A.exists(ints, 36)); // false
    }
}


/*
String Challenge

Instructions

Have the function

StringChallenge (strArr) read the array of strings stored in strarr which will be an unsorted list of times in a twelve-hour format like so: HH:MM(am/pm). Your goal is to determine the smallest difference in minutes between two of the times in the list. For example: if strarr is \["2:10pm", "1:30pm", "10:30am", "4:42pm"\] then your program should return 40 because the smallest difference is between 1:30pm and 2:10pm with a difference of 40 minutes. The input array will always contain at least two elements and all of the elements will be in the correct format and unique.

Examples
Input: new String\[\] {"1:10pm", "4:40am", "5:00pm"}
Output: 230

Input: new String\[\] {\*"10:00am", "11:45pm", "5:00am", "12:01am"}
Output: 299
*/

import java.util.*;

class Main {
    public static int StringChallenge(String[] strArr) {
        int minDiff = Integer.MAX_VALUE;
        int[] minutes = new int[strArr.length];

        for (int i = 0; i < strArr.length; i++) {
            String[] arr = strArr[i].split(":");
            int hour = Integer.parseInt(arr[0]);
            int minute = Integer.parseInt(arr[1].substring(0, 2));
            
            if (arr[1].substring(2).equalsIgnoreCase("pm")) {
                if (hour != 12) { hour += 12; }
            } else if (arr[1].substring(2).equalsIgnoreCase("am")) {
                if (hour == 12) { hour = 0; }
            }
            
            minutes[i] = hour * 60 + minute;
        }

        for (int i = 0; i < minutes.length; i++) {
            for (int j = i + 1; j < minutes.length; j++) {
                int diff = Math.abs(minutes[i] - minutes[j]);
                minDiff = Math.min(minDiff, diff);
            }
        }

        return minDiff;
    }

    public static void main(String[] args) {
        //case 1
        String[] strArr = {"1:10pm", "4:40am", "5:00pm"};
        //case 2
        String[] strArr2 = {"10:00am", "11:45pm", "5:00am", "12:01am"};
        
        System.out.println(StringChallenge(strArr));
        System.out.println(StringChallenge(strArr2));
    }
}


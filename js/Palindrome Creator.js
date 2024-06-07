/*
Palindrome Creator

Have the function PalindromeCreator(str) take the str parameter being passed and determine if it is possible to create a palindromic string of minimum length 3 characters by removing 1 or 2 characters. For example: if str is "abjchba" then you can remove the characters jc to produce "abhba" which is a palindrome. For this example your program should return the two characters that were removed with no delimiter and in the order they appear in the string, so jc. If 1 or 2 characters cannot be removed to produce a palindrome, then return the string not possible.

If the input string is already a palindrome, your program should return the string palindrome. Your program should always remove the characters that appear earlier in the string. In the example above, you can also remove ch to form a palindrome but jc appears first, so the correct answer is jc.

The input will only contain lowercase alphabetic characters. Your program should always attempt to create the longest palindromic substring by removing 1 or 2 characters (see second sample test case as an example). The 2 characters you remove do not have to be adjacent in the string.
*/


function PalindromeCreator(str) { 
  // code goes here 
  if(isValid(str)) { return "palindrome"; }

  for(let i = 0; i < str.length; i++){
    let newStr = str.slice(0,i) + str.slice(i+1); 
    if(isValid(newStr)) { return str[i]; }
  }

  for(let i = 0; i < str.length; i++){
    for(let j = i + 1; j < str.length; j++){
      let newStr = str.slice(0,i) + str.slice(i+1, j) + str.slice(j+1);
      if(isValid(newStr)) { return str[i] + str[j]; }
    }
  }
  
  return "not possible"; 

}

function isValid(txt){
  let left = 0;
  let right = txt.length -1;

  while(left < right){
    if(txt[left] !== txt[right]){ return false; }
    left++;
    right--;
  }
  return true;
}

//case1
console.log(PalindromeCreator("mmop"));//op

//case2
console.log(PalindromeCreator("abjchba"));//jc
//case3
console.log(PalindromeCreator("abhba"));//palindrome


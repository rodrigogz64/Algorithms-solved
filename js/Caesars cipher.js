/*
Caesars Cipher
One of the simplest and most widely known ciphers is a Caesar cipher, also known as a shift cipher. In a shift cipher the meanings of the letters are shifted by some set amount.

A common modern use is the ROT13 cipher, where the values of the letters are shifted by 13 places. Thus A ↔ N, B ↔ O and so on.

Write a function which takes a ROT13 encoded string as input and returns a decoded string.

All letters will be uppercase. Do not transform any non-alphabetic character (i.e. spaces, punctuation), but do pass them on.
*/

function rot13(str) {

  function decodeChar(char) {
    if (/[A-Z]/.test(char)) {
      let code = char.charCodeAt(0);
      let decodedCode = ((code - 65 + 13) % 26) + 65;
      
      return String.fromCharCode(decodedCode);
    } else { return char; }
  }

  return str.split('').map(decodeChar).join('');
}

console.log(rot13("SERR PBQR PNZC")); // Output: "FREE CODE CAMP"
//console.log(rot13("GUR DHVPX OEBJA SBK WHZCF BIRE GUR YNML QBT.")); // Output: "THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG."

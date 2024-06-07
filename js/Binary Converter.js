/*
Binary Converter

Have the function BinaryConverter(str) return the decimal form of the binary value. For example: if 101 is passed return 5, or if 1000 is passed return 8.
*/


function BinaryConverter(str) { 

  // code goes here  
  const binaryNumber = parseInt(str, 2);
  return binaryNumber; 

}
   
// keep this function call here 
//case1
console.log(BinaryConverter("01"));//1
//case2
console.log(BinaryConverter("101"));//5

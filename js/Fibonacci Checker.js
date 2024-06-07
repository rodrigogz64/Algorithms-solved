/*
Fibonacci Checker

Have the function FibonacciChecker(num) return the string yes if the number given is part of the Fibonacci sequence. This sequence is defined by: Fn = Fn-1 + Fn-2, which means to find Fn you add the previous two numbers up. The first two numbers are 0 and 1, then comes 1, 2, 3, 5 etc. If num is not in the Fibonacci sequence, return the string no.
*/

function FibonacciChecker(num) { 

  // code goes here  
  let fib = [0,1];

  while (fib[fib.length - 1] < num){
    const nextFib = fib[fib.length - 1] + fib[fib.length -2];
    fib.push(nextFib);
  }
  if(fib.includes(num)) { return 'yes'; }
  else { return 'no'; }
   

}
   
// keep this function call here 
//case1
console.log(FibonacciChecker(1));//yes
//case2
console.log(FibonacciChecker(20));//no

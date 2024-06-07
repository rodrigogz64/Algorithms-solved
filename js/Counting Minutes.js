/*
Counting Minutes

Have the function CountingMinutes(str) take the str parameter being passed which will be two times (each properly formatted with a colon and am or pm) separated by a hyphen and return the total number of minutes between the two times. The time will be in a 12 hour clock format. For example: if str is 9:00am-10:00am then the output should be 60. If str is 1:00pm-11:00am the output should be 1320.
*/


function CountingMinutes(str) { 

  // code goes here  
  const [startTime, endTime] = str.split('-');
  
  const strToMinutes = (time) => {
    const [hour, minute] = time.slice(0, -2).split(':');
    const period = time.slice(-2);

    let hours = parseInt(hour);
    const minutes = parseInt(minute);

    if(period === 'am' && hours === 12) {hours = 0;}
    else if(period === 'pm' && hours !== 12) { hours += 12; }
    
    return hours * 60 + minutes;
  }

  const startMinutes = strToMinutes(startTime);
  const endMinutes = strToMinutes(endTime);

  let total = endMinutes - startMinutes;
  if(total < 0) { total += 24 *60; }

  return total;

}
   
// keep this function call here 
//case1
console.log(CountingMinutes("12:30pm-12:00am"));//690
//case1
console.log(CountingMinutes("9:00am-10:00am"));//60

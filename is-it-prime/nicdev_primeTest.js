primeTest = function(num) {
  
  var isPrime = true;

  for(i = 2; i < num; i++) {
    if(num % i === 0) {
      isPrime = false;
      break;
    }
  }

  return isPrime;

}
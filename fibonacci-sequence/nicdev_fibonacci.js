var fibo = function(max) {
  var num = 0;
  var next = 1; 
  
  while(num <= max) {
    console.log(num);
    console.log(next);
    num = next + num;
    next = next + num;
  }
}
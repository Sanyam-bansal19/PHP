<?php 
function factorial($n)  
{  
  if($n <= 1) {  
    return 1;  
  }  
  else{  
    return $n * factorial($n - 1);  
  }  
}  
$n = 5;  
echo "Factorial of $n is " .factorial($n);  
echo "<br> This code is executed by Sanyam Bansal!";
?>  
<?php
echo "Hello Tapan\n";

echo "Enter the value 1: ";
$a = readline();

echo "You entered: " . $a. "\n";

echo "Enter the value 2: ";
$b= readline();
$sum= $a + $b;
echo "the sum is : " .$sum . "\n";

// if else statement
if($a < $sum){
    echo "NIce Work Tapan";
}elseif($b < $sum){
    echo "IMPROVEMENT Require";
}
else{
    echo "BSDK";
}
?>
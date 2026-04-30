<?php
function myfunction(){
    echo "This is my function \n";
}

function evenOdd($a){
    if($a % 2==0){
        echo "This is even number \n";
    }else{
        echo " This is odd number \n";
    }
}
myfunction();

echo "Enter the number : ";
$n=readline();
evenOdd($n);

?>
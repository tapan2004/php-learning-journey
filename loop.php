
<?php
// for loop -> loops through a block of code a specified number of times
for($i=0; $i<=10; $i++){
    if($i==3)
        continue;
    echo"$i";
  }

  // while -> loops through a block of code as long as the specified condition is true
  $a=11; $b=10;
  while($a<$b){
    echo "this is from while loop";
  }

// do-while -> loops through a block of code once, and then repeats the loop as long as the specified condition is true
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);

// for each -> loops through a block of code for each element in an array

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
  ?>
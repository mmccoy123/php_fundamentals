<?php

$numbers = array(1,2,5,10,255,3);
$average = 0;
$sum = 0;

for($i = 0; $i < count($numbers); $i++) {
  $sum += $numbers[$i];
  $average = $sum / count($numbers);
}

echo "average is: $average";

?>

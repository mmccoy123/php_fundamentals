<?php

$numbers = array(34,5,777,33,4,5);


function getAverage($param) {
  $sum = 0;
    for($i = 0; $i < count($param); $i++) {
      $sum += $param[$i];
      $average = $sum / count($param);
    }

echo "average is: $average";
}


getAverage($numbers);


function computeAverage($array) {
  $sum = 0;
  $average = 0;

  foreach ($array as $value) {
    $sum += $value;
  }
  $average = $sum / count($array);
  echo $average;
}

computeAverage($numbers);

$screech = "iiiikkkkk";
echo intval($screech);
?>

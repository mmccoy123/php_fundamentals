<?php

$array = [135, 2.4, 2.67, 1.23, 332, 2, 1.02];
$output = [];

function getMinMax($array) {
  $min = $array[0];
  $max = $array[0];

  for($i = 1; $i < count($array); $i++) {
    if($array[$i] < $min) {
      $min = $array[$i];
    }else if ($array[$i] > $max){
      $max = $array[$i];
    }
  }
  $output[max] = $max;
  $output[min] = $min;
  var_dump($output);

}

getMinMax($array);

?>

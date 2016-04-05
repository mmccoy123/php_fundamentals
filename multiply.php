<?php

$a = array(2,4,10,16);


function multiply($array, $number) {

  for($i = 0; $i < count($array); $i++) {
    $array[$i] *= $number;
  }
    return $array;
}

$result = multiply($a, 5);
var_dump($result);

?>

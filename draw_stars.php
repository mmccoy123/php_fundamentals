<?php

$array = [4,6,1,3,5,7,25];
$array2 = [4,"Tom",1,"Michael",5,7,"Jimmy Smith"];


function draw_stars($x) {
  $stars = "";
  for($i = 0; $i < count($x); $i++) {
    for($j = 0; $j < $x[$i]; $j++) {
      $stars .= "*";
    }
    $stars .= "<br>";
  }
  echo $stars;
}

function draw_stars2($x) {
  $stars = "";
  for($i = 0; $i < count($x); $i++) {
    if(is_int($x[$i])) {
      for($j = 0; $j < $x[$i]; $j++) {
        $stars .= "*";
      }
  } else {
    $stars .= strtolower(substr($x[$i],0,1));
  }
    $stars .= "<br>";
}
    echo $stars;
}

echo "<h1>Part 1</h1>";
draw_stars($array);

echo "<h1>Part 2</h1>";
draw_stars2($array2);

?>

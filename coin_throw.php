<?php

$count_head = 0;
$count_tail = 0;

for($i = 1; $i <= 5000; $i++) {
  $coin_throw = rand(0,1);
  if($coin_throw == 0) {
    $count_head ++;
    echo "Attempt # $i : Throwing a coin... It's a head!... Got  $count_head head(s) so far and $count_tail tail(s) so far <br/>";
  } else {
    $count_tail ++;
    echo "Attempt # $i : Throwing a coin... It's a tail!... Got  $count_tail tail(s) so far and $count_head head(s) so far <br/>";
  }
}

?>

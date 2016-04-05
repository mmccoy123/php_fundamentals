<?php

for($i = 1; $i <= 100; $i++) {
  $score = rand(50, 100);
  if($score >= 90) {
    echo '<h1>'. $i . ') score is: ' . $score . '</h1>';
    echo '<h2>grade is: A</h2>';
  } else if($score >= 80 ){
    echo '<h1>' . $i . ') score is: ' . $score . '</h1>';
    echo '<h2>grade is: B</h2>';
  } else if($score >= 70 ){
    echo '<h1>' . $i . ') score is: ' . $score . '</h1>';
    echo '<h2>grade is: C</h2>';
  } else {
    echo '<h1>' . $i . ') score is: ' . $score . '</h1>';
    echo '<h2>grade is: D</h2>';
  }
}
?>

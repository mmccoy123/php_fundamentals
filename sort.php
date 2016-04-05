<?php



for($i=0; $i < 10000; $i++) {
  $array[] = rand(0, 10000);
}

$time_start = microtime(true);
function sortArray($arr) {

    for($i = 0; $i < count($arr)-1; $i++) {

      for($j = $i+1; $j < count($arr); $j++) {
        $temp = $arr[$i];
        $max = $arr[$i];
      if($arr[$j] < $arr[$i]) {
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
      } else if ($arr[$j] > $arr[$i]) {
        $max = $arr[$j];
      }
    }
  }
  echo "max: $max <br />";
  return $arr;
}

$result = sortArray($array);

$time_end = microtime(true);
$time = $time_end - $time_start;
 echo "this function took $time to run the code";
echo '<pre>';
var_dump($result);
echo '</pre>';

?>

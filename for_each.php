<?php
//1. output:
// 0 - 1
// 1 - 3
// 2 - 5
// 3 - 7
$x = array(1,3,5,7);
foreach ($x as $key => $value) {
  echo $key . " - " . $value . "<br/>";
}

//2. output:
// 1
// 3
// 5
// 7
foreach ($x as $value) {
  echo $value . "<br/>";
}

//3. output
// hi - Dojo
// awesome - game
$x = array("hi" => "Dojo",
           "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}


//4. output
// Dojo
// game

$x = array("hi" => "Dojo",
           "awesome" => "game");
foreach($x as $key => $value)
{
  echo $value ."<br />";
}

//5. output
// hi
// awesome
$x = array("hi" => "Dojo",
           "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key ."<br />";
}

//6. output:
// Key is 0
// var_dumping value
// array(3) { [0]=> int(1) [1]=> int(3) [2]=> int(5) } Key is 1
// var_dumping value
// array(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } Key is 2
// var_dumping value
// array(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) }
//what is the reason for the {} around $key??? it works without them as well

$x = array(
    array(1,3,5),
    array(2,4,6),
    array(3,6,9)
);
foreach($x as $key => $value) {
  echo "Key is {$key}<br />";
  echo "var_dumping value <br/>";
  var_dump($value);
}

//7.
// var_dumping value
// array(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) } var_dumping value
// array(3) { [0]=> int(1) [1]=> int(3) [2]=> int(5) } var_dumping value
// array(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } var_dumping value
// array(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) }

$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
foreach($x as $value) {
  echo "var_dumping value <br/>";
  var_dump($value) . "<br/>";
}

//8.
// key is 0 hi-Dojo
//   game-awsome
// key is 1 dude - fun
//   play - what?
// key is 2 no - way
//   i am - confused?

$x = array(
     array("hi"=>"Dojo", "game"=>"awesome"),
     array("dude"=>"fun", "play"=>"what?"),
     array("no"=>"way", "i am"=>"confused?")
);
foreach($x as $key => $value)
{
  echo "key is {$key}<br />";
  foreach($value as $key2=>$value2)
  {
    echo $key2 ." - " . $value2."<br />";
  }
}

//9.
// hi - Dojo
// game - awsome
// dude - fun
// play - what?
// no - way
// i am - confused?

$x = array(
     array("hi"=>"Dojo", "game"=>"awesome"),
     array("dude"=>"fun", "play"=>"what?"),
     array("no"=>"way", "i am"=>"confused?")
   );
foreach($x as $y)
{
  foreach($y as $key=>$value)
  {
    echo $key ." - " . $value."<br />";
  }
}
?>

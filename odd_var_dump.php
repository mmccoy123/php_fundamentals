<?php

$oddNumbers = [];

for($i = 1; $i <= 20000; $i+=2) {

  array_push($oddNumbers, $i);
}

var_dump($oddNumbers);

?>

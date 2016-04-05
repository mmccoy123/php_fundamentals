<?php

$users = [
  "first_name" => "Michael",
  "last_name" => "Choi"
];

function printUsers($array){
  $output1 = "There are " . count($array) . " keys in this array: ";

  foreach ($array as $key => $value) {
       $output1 .= $key . ',';
       echo "The value in the key " . $key . " is " . $value . '<br/>';
  }

      echo $output1 . '<br/>';
    
}

printUsers($users);
?>

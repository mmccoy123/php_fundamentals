<?php

$a = array(2,3,'hello');

function printList($array) {
    $result = '<ul>';

  foreach ($array as $value) {
    $result .= '<li>' . $value . '</li>';
  }
    $result .= '</ul>';
    echo $result;
}


printList($a);

?>

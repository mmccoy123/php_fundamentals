<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

//first drop-down menu
echo '<h1>Using for loop</h1>';
  $output = '<select>';
for($i = 0; $i < count($states); $i++) {
  $output .= '<option>' . $states[$i] . '</option>';
}
  $output .= '</select>';
  echo $output;

//second drop down menu
echo '<h1>Using for each</h1>';
  $result = '<select>';
  foreach ($states as $state) {
    $result .= '<option>' . $state . '</option>';
  }
  $result.= '</select>';
  echo $result;

//third drop-down menu
  $states[] = 'NJ';
  $states[] = 'NY';
  $states[] = 'DE';
echo '<h1>Displaying 8 states</h1>';
  $menus = '<select>';
  foreach ($states as $state) {
    $menus .= '<option>' . $state . '</option>';
  }
  $menus.= '</select>';
  echo $menus;

  $array = 'Hey'. 123 .'Ho';
echo $array;

?>

<?php

$row = 1;
//solution 1
if(($data = fopen("us-500.csv", "r")) !== FALSE) {
  ini_set('auto_detect_line_endings', true);
  while(($result = fgetcsv($data, 1000, ",")) !== FALSE) {
    $num = count($result);
    echo "<p> $num  fields in line $row: <br/></p>\n";
    $row++;
    for($i=0; $i < $num; $i++) {
      echo $result[$i] . "<br/>\n";
    }
  }

fclose($data);
}

//solution 2
// $csvFile = file("us-500.csv");
// $data = [];
// foreach ($csvFile as $line) {
//   $data[] = str_getcsv($line);
// }

//solution 3
// $csv = array_map('str_getcsv', file('us-500.csv'));

// echo '<pre>';
// var_dump($csv[0]);
// echo '</pre>';
//http://stackoverflow.com/questions/817783/read-in-text-file-line-by-line-php-newline-not-being-detected

// for($i=0; $i<count($csv[0]); $i++) {
//   echo '<pre>';
//   var_dump($csv[0][$i]);
//   echo '</pre>';
//

// <h1>Record <?php echo $i+1 ?></h1>

<!-- <ul>
  <li>First Name: James</li>
  <li>Last Name: Butt</li>
  <li>Company Name: Benton, John B</li>
  <li>Address: ....</li>
  <li>...</li>
</ul>
<h1>Record 2</h1>
<ul>
  <li>First Name: Josephine</li>
  <li>Last Name: Darakjy</li>
  <li>Company Name: ....</li>
  <li>Address: ....</li>
  <li>...</li>
</ul> -->

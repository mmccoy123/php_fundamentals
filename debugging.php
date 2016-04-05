<?php

echo "<h2> Fix all the errors to show the page </h2>"; //echo and ; missing
$array = array("var_dump", "and", "echo", "helps", "debug");
for($i = 0; $i < count($array); $i++) //$ was missing, count() should be used instead of array.length
{
  echo "The value of the $i index is $array[$i] "; //echo and $ missing, + used in error instead of . (or "" )
}

echo "<h3>isset function determines if a variable is set and is not NULL</h3>"; //echo and ; missing

$error = ''; // missing ;

if(isset($error))
{
  echo "Is an empty string NULL? Also, think of an operator that we can use to return a true value to a variable that is not set yet!!!!!";
} // closing } was missing
if(isset($array)) //removed "hi" as it's not an associative array
{
  echo '<pre>';
  var_dump($array);
  echo '</pre>';
}

?> <!--the ? was missing-->

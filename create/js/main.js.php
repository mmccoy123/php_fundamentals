<?php
  header("Content-Type: application/javascript");
 ?>

$(document).ready(function() {

<?php
$no1 = rand(1,100);
$no2 = rand(1,100);
?>

alert(' <?php
echo $no1;
 ?>x<?php
echo $no2;
?> = <?php echo $no1 * $no2; ?> ');

});

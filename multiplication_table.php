<html>
<style>
table,th,td {
  margin: 2px;
  padding: 5px;
  text-align: center;
}
table {
  border-collapse: collapse;
}

td {
  border: 2px solid rgb(179, 171, 209);
}


</style>
<table>
  <tr>
    <th></th>
    <!--add top headings-->
    <?php
      for($i=1; $i<10; $i++) {
    ?>
    <th><?php echo $i; ?></th>

     <?php } ?>
  </tr> <!--end of top heaing-->

  <?php for($i=1; $i<10; $i++)
    { ?>
    <tr>
    <th><?php echo $i; ?>
<?php   for($j=1; $j<10; $j++)
    { ?>
     <td><?php echo $i * $j; ?></td>
     <?php } ?>

  </tr>

<?php } ?>

</table>

</html>

<?php



?>

<style>

table {
  border-collapse: collapse;
}
th {
  margin-left: 10px;
}
th, td {
  padding: 5px;
  text-align: center;
  border: 1px solid #bdc6bc;
}

.black {
  background-color: #000;
  color: #fff;
}

</style>


<?php
$users = array(
   array('first_name' => 'Michael',
         'last_name' => 'Choi'),
   array('first_name' => 'John',
         'last_name' => 'Supsupin'),
   array('first_name' => 'Mark',
         'last_name' => 'Guillen'),
   array('first_name' => 'KB',
         'last_name' => 'Tonel'),
   array('first_name' => 'Barak',
         'last_name' => 'Obama'),
   array('first_name' => 'Michael',
         'last_name' => 'Choi'),
   array('first_name' => 'John',
         'last_name' => 'Supsupin'),
   array('first_name' => 'Mark',
         'last_name' => 'Guillen'),
   array('first_name' => 'KB',
         'last_name' => 'Tonel'),
   array('first_name' => 'Barak',
        'last_name' => 'Obama')
);

?>

<html>
  <table>
    <tr>
      <th>User #</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Full Name</th>
      <th>Full Name in upper case</th>
      <th>Length of full name (without spaces)</th>
    </tr>
        <?php for($i = 0; $i < count($users); $i++) {
          // $row = $users[$i];
          if(($i+1) % 5 == 0) {
        ?>

         <tr class="black">
         <?php } else { ?>
             <tr>
            <?php } ?>

          <th>
            <?php echo $i + 1; ?>
          </th>

              <?php
                  $full_name="";
                  foreach ($users[$i] as $key => $value) {
              ?>
                <td>
                  <?php  echo $value;
                  $full_name .= $value . " ";
            } ?></td>
                <td>
                  <?php echo $full_name; ?>
                </td>
                <td>
                  <?php echo strtoupper($full_name); ?>
                </td>
                <td>
                  <?php echo strlen(str_replace(" ","",$full_name)); ?>
                </td>
                </tr>
          <?php  } ?>

  </table>
</html>

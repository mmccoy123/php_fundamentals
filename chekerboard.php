<html>
<style>

div {
  height: 28px;
  width: 28px;
}
.white {
  background-color: red;
}
.black {
  background-color: #000;
}

table {
  border-collapse: collapse;
}

</style>

<table>
  <?php

  $oddrow = true;

  for($i=0; $i<7; $i++) {
    $output = '<tr>';

    for($j=0; $j<7; $j++) {

      if($oddrow ==true) {
        if($j%2 == 0 ) {
            $output .= '<td><div class ="black"></div></td>';
        }
        else {
             $output .= '<td><div class ="white"></div></td>';
        }
      }

      else {
        if($j%2 == 0) {
            $output .= '<td><div class ="white"></div></td>';
        }
        else {
             $output .= '<td><div class ="black"></div></td>';
        }
      }

    }

    echo $output .= '</tr>';
    // var_dump($oddrow == false);
      if($oddrow == false) {
        $oddrow = true;

      } else {
        $oddrow = false;
      }

  }



  ?>
  <!-- <tr class="odd">
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
  </tr>
  <tr class="even">
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
  </tr>
  <tr class="odd">
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
  </tr>
  <tr class="even">
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
  </tr>
  <tr class="odd">
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
    <td><div class="white"></div></td>
    <td><div class="black"></div></td>
  </tr>-->

</table>

</html>

<?php



?>

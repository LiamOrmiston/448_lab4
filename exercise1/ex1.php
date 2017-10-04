<?php
  $total = 100;
  echo '<table>';
  echo '<tr><th></th>';
  for ($i = 1; $i <= $total; $i++) {
    // first row
    echo "<th>" . $i . "</th>";
  }
  echo '</tr>';
  for ($i = 1; $i <= $total; $i++) {
    // first column
    echo '<tr><th>' . $i . '</th>';
    for ($j = 1; $j <= $total; $j++) {
      // multiplication table content
      echo "<td>". $i*$j . "</td>";
    }
    echo "</tr>";
  }
  echo '</table>';
?>

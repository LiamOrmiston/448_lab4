<?php
  $total = 100;
  for ($i = 1; $i <= $total; $i++) {
    // first row
    echo $i;
  }
  for ($i = 1; $i <= $total; $i++) {
    // first column
    echo $i;
    for ($j = 1; $j <= $total; $j++) {
      // multiplication table content
      echo $i*$j;
    }
  }
?>

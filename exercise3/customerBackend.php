<?php
	echo '<link type="text/css" rel="stylesheet" href="style.css">';
	$username = $_POST["username"];
	$password = $_POST["password"];
	$shipping = $_POST["shipping"];
  $monitor = $_POST["monitor"];
  $mouse = $_POST["mouse"];
  $keyboard = $_POST["keyboard"];

  $ship_cost = 0;
  $mon_total = number_format(($monitor*150),'2');
  $mouse_total = number_format(($mouse*15),'2');
  $key_total = number_format(($keyboard*75),'2');

  echo "<div class=\"block\">";
	echo "<p>Hello " . $username . ", your password is " . $password . "</p><br>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Item</th>";
	echo "<th>Quantity</th>";
	echo "<th>Cost Per Item</th>";
	echo "<th>Sub Total</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Monitor</td>";
	echo "<td>" . $monitor . "</td>";
	echo "<td>$150.00</td>";
	echo "<td>$" . $mon_total . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Mouse</td>";
	echo "<td>" . $mouse . "</td>";
	echo "<td>$15.00</td>";
	echo "<td>$" . $mouse_total . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Keyboard</td>";
	echo "<td>" . $keyboard . "</td>";
	echo "<td>$75.00</td>";
	echo "<td>$" . $key_total . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Shipping</td>";
		if($shipping == "7_day") {
      echo '<td colspan = "2">7 day</td>';
      echo "<td>$0.00</td>";
      $ship_cost = 0;
    }
    if($shipping == "3_day") {
      echo '<td colspan = "2">3 day</td>';
      echo "<td>$5.00</td>";
      $ship_cost = 5;
    }
    if($shipping == "overnight") {
      echo '<td colspan = "2">Overnight</td>';
      echo "<td>$50.00</td>";
      $ship_cost = 50;
    }
	echo "</tr>";
	echo "<tr>";
	echo '<th colspan = "3">Total</td>';
	echo '<td id="total">$' . number_format(($mon_total + $mouse_total + $key_total + $ship_cost),"2") . "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
?>

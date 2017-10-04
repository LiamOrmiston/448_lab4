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
?>

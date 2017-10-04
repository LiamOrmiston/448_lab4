<?php
$x1 = "$_POST[q1]";
$x2 = "$_POST[q2]";
$x3 = "$_POST[q3]";
$x4 = "$_POST[q4]";
$x5 = "$_POST[q5]";

$y1 = "4";
$y2 = "6";
$y3 = "9";
$y4 = "6";
$y5 = "3.14159";

$score = ($x1 == $y1 ? 1 : 0) + ($x2 == $y2 ? 1 : 0) + ($x3 == $y3 ? 1 : 0) + ($x4 == $y4 ? 1 : 0) + ($x5 == $y5 ? 1 : 0);
$percent = $score*20;

echo '<div>';
echo "<p>1: What is 2+2?<br>You answered: " . $x1 . "<br>Correct answer: $y1</p>";
echo "<p>2: What is 2*3?<br>You answered: " . $x2 . "<br>Correct answer: $y2</p>";
echo "<p>3: What is 27/3?<br>You answered: " . $x3 . "<br>Correct answer: $y3</p>";
echo "<p>4: What is 11-5?<br>You answered: " . $x4 . "<br>Correct answer: $y4</p>";
echo "<p>5: What is pi to 5 decimal places?<br>You answered: " . $x5 . "<br>Correct answer: $y5</p>";

echo "<p>You scored: " . $score . "/5 for a total of " . $percent . "%.</p>";
echo '</div>';
 ?>

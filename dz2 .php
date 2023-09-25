<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Form</title>
  </head>
  <body>
<?php
$k = rand(1,365); // Random Число от 1 до 365 
echo 'Random Число от 1 до 365 = ' .$k .';' ;
$januaryFirst = 1; // остаток от деления 1 января на 7
$dayOfWeek = ($k % 7 + $januaryFirst) % 7; // номер дня недели для K-го дня года
echo ' Номер дня недели для K-го дня года: ' . $dayOfWeek;
?>
  </body>
</html>
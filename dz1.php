<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Form</title>
  </head>
  <body>
<?php
// Изначальные значения переменных A, B, C
$A = 1;
$B = 2;
$C = 3;
echo "A: " . $A . "\n";
echo "B: " . $B . "\n";
echo "C: " . $C . "\n";

// Перемещение значений переменных
$temp = $A;
$A = $C;
$C = $B;
$B = $temp;

// Вывод новых значений переменных
echo "Новые значения переменных:\n";
echo "A: " . $A . "\n";
echo "B: " . $B . "\n";
echo "C: " . $C . "\n";
?>

  </body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Form</title>
  </head>
  <body>
<?php
function isFieldWhite($x, $y) {
    // Проверяем, что сумма координат поля является четным числом
    if (($x + $y) % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
// Пример использования функции:
$x = 4;
$y = 5;
if (isFieldWhite($x, $y)) {
    echo "Данное поле является белым";
} else {
    echo "Данное поле является черным";
}
?>
  </body>
</html>
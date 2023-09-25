<?php

try {
    if (isset($_POST['submit'])) {
        $n = $_POST['n'];
        $v = $_POST['v'];
        $sum=$n+$v;
        echo "Форма успешно обработана и данные отправлены!";
    }
    else {
          throw new Exception("Что то пошло не так !",2047);//EAll
    }
}
catch (Exception $ex) {
    echo "Произошла ошибка при обработке формы: " . $ex->getMessage();
    echo '<br>';
    echo "Произошла ошибка при обработке формы: " . $ec->getCode();
}
catch (Exception $ec) {
    echo "Произошла ошибка при обработке формы: " . $ec->getLine();
}
?>
<?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
//include_once("session.php");
include_once("db.php");

if (isset($_GET['ID_Categoria'])) $ID_Categoria = $_GET['ID_Categoria'];

if (!empty($ID_Categoria)) {
    try {

        $query = "DELETE FROM Categoria WHERE ID_Categoria = :ID_Categoria";

        $sql = $db->prepare($query);


        $data = [
            'ID_Categoria' => $ID_Categoria
        ];

        $sql->execute($data);
        $_SESSION['success'] = 'Категория успешна удалена.';
        header('Location: category.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    if (empty($status)) $_SESSION['error']['text'] = 'Введите правильный идентификатор для удаления';
    header('Location: category.php');
}
?>
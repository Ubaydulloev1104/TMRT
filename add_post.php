<?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
include_once("session.php");
include_once("db.php");
?>
<?php
if (isset($_POST['name'])) $name = $_POST['name'];
if (isset($_POST['text'])) $text = $_POST['text'];
if (isset($_POST['categoryId'])) $categoryId = $_POST['stacategoryIdtus'];
if (isset($_POST['status'])) $status = $_POST['status'] == "on" ? 1 : 0;

if (!empty($name) && !empty($status)) {
    try {

        $query = "INSERT post (name, text, status, categoryId) VALUES (:name, :text, :status, :categoryId)";

        $sql = $db->prepare($query);

        // $sql->bindValue('id', )

        $data = [
            'name' => $name,
            'text' => $text,
            'status' => $status,
            'categoryId' => $categoryId
        ];

        $sql->execute($data);
        $_SESSION['success'] = 'Статья успешна добавлена.';
        header('Location: category.php');

         } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    if (empty($status)) $_SESSION['error']['status'] = 'Активируйте пожалуйста статус';
    header('Location: update_category_form.php?id=' . $id);
}
?>
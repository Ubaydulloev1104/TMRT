<?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
include_once("session.php");
include_once("db.php");
?>
<?php
if (isset($_POST['ID_Categoria'])) $id = $_POST['ID_Categoria'];
if (isset($_POST['Name'])) $Name = $_POST['Name'];
if (isset($_POST['ID_user'])) $ID_user = $_POST['ID_user'];
if (isset($_POST['Status'])) $Status = $_POST['Status'] == "on" ? 1 : 0;

if (!empty($Name) && !empty($Status)) {
    try {

        $query = "UPDATE Categoria SET Name = :Name ,ID_user=:ID_user,Update_Data=:Now(), Status = :Status WHERE ID_Categoria = :ID_Categoria";

        $sql = $db->prepare($query);

        // $sql->bindValue('id', )

        $data = [
            'ID_Categoria' => $ID_Categoria,
            'Name' => $Name,
            'ID_user' => $ID_user,
            'Status' => $Status
        ];

        $sql->execute($data);
        $_SESSION['success'] = 'Категория успешна обновлена.';
        header('Location: category.php');

         } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    if (empty($status)) $_SESSION['error']['status'] = 'Активируйте пожалуйста статус';
    header('Location: update_category_form.php?id=' . $ID_Categoria);
}
?>
<?php
class User {
    private $id;
    private $firstname;
    private $lastname;
    private $email;

    public function get($id) {
        // код для получения пользователя по ID
    }

    public function create($firstname, $lastname, $email) {
        // код для создания нового пользователя
    }

    public function update($id, $firstname, $lastname, $email) {
        // код для обновления данных пользователя
    }

    public function delete($id) {
        // код для удаления пользователя
    }
}
?>
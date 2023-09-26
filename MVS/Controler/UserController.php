<?php
class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function index() {
        // код для отображения списка пользователей
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
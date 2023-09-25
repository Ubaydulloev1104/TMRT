<?php


include_once("db.php");
include_once("session.php");
include_once("functions.php");

if (session_id() == "") {
    session_start();
}

if (isset($_POST['login'])) $login = $_POST['login'];
if (isset($_POST['password'])) $password = $_POST['password'];
if (isset($_POST['remember'])) {
    $remember = $_POST['remember'] == "on" ? 1 : 0;
}


if (!empty($login) && !empty($password)) {

    if(strlen($password) < 3) {
    	echo "Запольните форму правильно.";
    	exit;
    }


    try {

        $query = "SELECT * FROM User WHERE login = :login AND status = 1";

        $sql = $db->prepare($query);

        $sql->bindValue(':login', $login);

        $sql->execute();
        if ($sql->rowCount() > 0) {

            $row = $sql->fetch();


            if (password_verify($password, $row['password'])) {

                $_SESSION["id"] = session_id();
                debug($_SESSION["id"], true);

                $_SESSION['userId'] =  $row['id'];
                $_SESSION['login'] =  $row['login'];

                // debug($_SESSION, true);

                if (isset($remember) && $remember == 1) {
                    
                    //добавление куки
                    if (setcookie('sessionId', $_SESSION["id"])) {
                        debug($_COOKIE['sessionId'], true);
                    }

                    // debug($remember, true);
                }


                header("Location: add_category.php");
                exit;
            }

            debug($row, true);
        }




        $data = [
        	'name' => $name,
        	'status' => $status
        ];

        $sql->execute($data);

        echo "Ok";
        echo "<br>";

        $sql = "SELECT * FROM category";
        $result = $db->query($sql);

        debug($result);


        while($row = $result->fetch()) {
        	debug($row);
        }

        debug($row);


    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    if (empty($login)) $_SESSION['error']['login'] = 'Запольните правильно поля Логин';
    if (empty($password)) $_SESSION['error']['password'] = 'Запольните правильно поля Password';
}

header("Location: login.php");

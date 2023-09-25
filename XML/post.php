<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['xml_file'])) {
    $xml_file = $_FILES['xml_file']['tmp_name'];
    if (file_exists($xml_file)) {
        $xml = simplexml_load_file($xml_file);
        if ($xml) {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=animesite', 'root', 'root');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                foreach ($xml->record as $record) {
                    $name = (string)$record->name;
                    $createDate = (string)$record->createDate;
                    $updateDate = !empty($record->updateDate) ? (string)$record->updateDate : null; 
                    $stmt = $pdo->prepare("INSERT INTO test (name, createDate, updateDate) VALUES (:name, :createDate, :updateDate)");
                    $stmt->bindParam(':name', $name);
                    $stmt->bindParam(':createDate', $createDate);
                    $stmt->bindParam(':updateDate', $updateDate, PDO::PARAM_NULL); 
                    $stmt->execute();
                }
                echo "Данные успешно импортированы в базу данных.";
            } catch (PDOException $e) {
                echo 'Ошибка: ' . $e->getMessage();
            }
        } else {
            echo "Неверный формат XML-файла.";
        }
    } else {
        echo "XML-файл не найден.";
    }
    header('Location: ../index.php');
}
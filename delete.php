<!-- delete.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
       $conn = new PDO("mysql:host=localhost;dbname=TMPT_db", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id_user = $_POST['id_user'];

    $sql = "DELETE FROM `User` WHERE id_user = :id_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->execute();

    echo "Record deleted successfully.";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
}
?>

<!-- update.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
      $conn = new PDO("mysql:host=localhost;dbname=TMPT_db", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id_user = $_POST['id_user'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "UPDATE `User` SET Firstname =:frstname,Lastname=:lastname,Email=:email WHERE ID_user=:id_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->execute(); 

    echo "Record updated successfully.";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
}
?>
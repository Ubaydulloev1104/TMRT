<!-- read.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
  try {
    $conn = new PDO("mysql:host=localhost;dbname=TMPT_db", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id_user = $_GET['id_user'];

    $sql = "SELECT * FROM `User` WHERE ID_user = :id_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id_user', $id_user);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
      echo "User ID: " . $result['ID_user'] . "<br>";
      echo "Firstname: " . $result['Firstname'] . "<br>";
      echo "Lastname: " . $result['Lastname'] . "<br>";
      echo "Email: " . $result['Email'] . "<br>";
    } else {
      echo "User not found.";
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
}
?>
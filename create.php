<!-- create.php -->
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
     $conn = new PDO("mysql:host=localhost;dbname=TMPT_db", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `User` (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo "Record created successfully.";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
  // header('UserForm.html');
  // exit()
}

?>
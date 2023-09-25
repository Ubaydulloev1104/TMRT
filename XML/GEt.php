<?php
$db = mysqli_connect("localhost", "root", "", "TMPT_db");
$query = "SELECT * FROM User";
$result = mysqli_query($db, $query); 
$xml = new SimpleXMLElement('<users></users>');
while ($row = mysqli_fetch_assoc($result)) {
    $user = $xml->addChild('user');
    $user->addChild('ID_user', $row['ID_user']);
    $user->addChild('Firstname', $row['Firstname']);
    $user->addChild('Lastname', $row['Lastname']);
    $user->addChild('Email', $row['Email']);
}
$xml->asXML('users.xml');
echo" Бло добавленно на users.xml ";
$xmlString = file_get_contents('users.xml');
$xml = new SimpleXMLElement($xmlString);
foreach ($xml->user as $user) {
    $ID_user = $user->ID_user;
    $Firstname = $user->Firstname;
    $Lastname = $user->Lastname;
    $Email = $user->Email;
    $quer = "INSERT INTO ArUser (ID_user, Firstname, Lastname, Email) VALUES ('$ID_user', '$Firstname', '$Lastname', '$Email')";
    mysqli_query($db, $query);
}
echo"Было зарисонно на Таблыцу ArUser ";
?>
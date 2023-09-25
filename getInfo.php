<?php
$db = mysqli_connect("localhost", "root", "", "TMPT_db");

$ID_user = (int) $_GET['q'];

$result = mysqli_query($db, "SELECT * FROM User WHERE ID_user = ".$ID_user."");

echo "<table border='1'>
        <tr>
            <th>№</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Status </th>
        </tr>
";

echo mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result))
{
    echo "
        <tr>
            <td>".$row['ID_user']."</td>
            <td>".$row['Firstname']."</td>
            <td>".$row['Lastname']."</td>
            <td>".$row['Email']."</td>
            <td>".$row['Status']."</td>
        </tr>
    ";

}

echo "</table>";

mysqli_close($db);
?>
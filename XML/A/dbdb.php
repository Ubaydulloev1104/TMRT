<?php
$db = mysqli_connect("localhost", "root", "", "TMPT_db");
?>
<html>

<head>
    <meta charset="utf-8">
    <title>User</title>

</head>

<body>

    <form>

        <!-- <select name="category" id="1">
        <option value="">Select category</option>
        <option value="1">Cat 1</option>
        <option value="2">Cat 2</option>
        <option value="3">Cat 3</option>
    </select> -->

        <select name="cat" onchange="pokazTovarov(this.value)" style="height:50px;">
            <option value="">Выберите Id User</option>
            <?php
            $result = mysqli_query($db, "SELECT * FROM User WHERE status = 1");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['ID_user'] . "'>";
                echo $row['Firstname'];
                echo "</option>";
            }
            ?>
        </select>
    </form>

    <div id="InfoTovarov">

    </div>


    <script type="text/javascript">
        function pokazTovarov(ID_user) {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("InfoTovarov").innerHTML = xmlhttp.responseText;
                }
            }

            xmlhttp.open("GET", "getInfo.php?q=" + categoriyaId, true);
            xmlhttp.send();

        }
    </script>

</body>

</html>
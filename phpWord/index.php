<?php
$db = mysqli_connect("localhost", "root", "", "TMPT_db");
require_once 'vendor/autoload.php';
//подключаем библиотеку TemplateProcessor для работы с шаблоном
use PhpOffice\PhpWord\TemplateProcessor;
if ($_POST) {
	$ID_user = $_POST['ID_user'];
	$result = mysqli_query($db, "SELECT * FROM User WHERE ID_user = ".$ID_user."");
	echo mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result))
{
   
            $ksrChast =$row['ID_user'];
            $predmet =$row['Firstname'];
            $fioStudenta =$row['Lastname'];
            $kurs =$row['Email'];
            $gruppa = $row['Create_Data'];
			$fioPrepodovatelya=$row['Status'];

}
	//определяем имя будущего файла
	$wordFile = $fioStudenta . '.docx';

	//загружаем шаблон
	$document = new TemplateProcessor('KSTitleTemplate.docx');

	//заполняем нужные поля на файле ворд в соответсвии с метками
	$document->setValue('ksrChast', $ksrChast);
	$document->setValue('predmet', $predmet);

	$document->setValue('fioStudenta', $fioStudenta);
	$document->setValue('kurs', $kurs);
	$document->setValue('gruppa', $gruppa);

	$document->setValue('fioPrepodovatelya', $fioPrepodovatelya);

	//определяем хедер для генерации файоа ворд
	header("Content-Description: File Transfer");
	header('Content-Disposition: attachment; filename="' . $wordFile . '"'); // здесь задается имя генерируемого файла
	header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
	header('Content-Transfer-Encoding: binary');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Expires: 0');

	//генерируем файл
	$document->saveAs("php://output");

} else {

?>
 <form action="#" method="post">
	 <form >
        <!-- <select name="category" id="1">
        <option value="">Select category</option>
        <option value="1">Cat 1</option>
        <option value="2">Cat 2</option>
        <option value="3">Cat 3</option>
    </select> -->

        <select name="cat" onchange="pokazTovarov(this.value)" style="height:50px;">
            <option value="">Выберите Id User</option>
            <?php
            $result = mysqli_query($db, "SELECT * FROM User");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['ID_user'] . "'>";
                echo $row['ID_user'];
                echo "</option>";
            }
            ?>
        </select>

		<input type="hidden" name="ID_user" value="1">
		<hr>
		<div>
			<input type="submit" value="Создать файл">
		</div>
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
            xmlhttp.open("GET", "getInfo.php?q=" + ID_user, true);
            xmlhttp.send();
        }
    </script>
	</form>
		<form >
		
		

	</form>

<?php

}

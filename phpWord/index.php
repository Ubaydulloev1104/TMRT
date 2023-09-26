<?php

require_once 'vendor/autoload.php';

//подключаем библиотеку TemplateProcessor для работы с шаблоном
use PhpOffice\PhpWord\TemplateProcessor;

if ($_POST) {

	$ksrChast = $_POST['ksrChast'];
	$predmet = $_POST['predmet'];
	$fioStudenta = $_POST['fioStudenta'];
	$kurs = $_POST['kurs'];
	$gruppa = $_POST['gruppa'];
	$fioPrepodovatelya = $_POST['fioPrepodovatelya'];

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

	<style>
		form {
			font-size: 20px;
			font-weight: bold;
			width: 40%;
		}
		form div {
			margin: 15px;
		}

		form label {
			display: block;
		}

		form input {
			width: 100%;
			height: 30px;
			font-size: 20px;

		}
	</style>

	<h1>Форма генерации титульного листа КСР</h1>

	<form action="#" method="post">
		<div>
			<label for="ksrChast">№ части КСР</label>
			<input type="text" name="ksrChast" value="1">
		</div>

		<hr>

		<div>
			<label for="fioStudenta">ФИО студента</label>
			<input type="text" name="fioStudenta" value="Набизода Абдукаюм Наими">
		</div>

		<div>
			<label for="kurs">Курс</label>
			<input type="text" name="kurs" value="4">
		</div>

		<div>
			<label for="gruppa">Группа</label>
			<input type="text" name="gruppa" value="40.01.01 рА">
		</div>

		<hr>

		<div>
			<label for="predmet">Предмет</label>
			<input type="text" name="predmet" value="Технологии и языки Internet-программирования">
		</div>

		<div>
			<label for="fioPrepodovatelya">ФИО преподователя</label>
			<input type="text" name="fioPrepodovatelya" value="Турахонов М.И.">
		</div>

		<div>
			<input type="submit" value="Создать файл">
		</div>

	</form>

<?php

}

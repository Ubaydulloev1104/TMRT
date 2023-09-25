   <?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
//include_once("session.php");
include_once("db.php");
include_once('header.php');
?>

<form method="POST" action="process_form.php">
    <div class="row">
		<div class="col-md-7">
			<div class="form-group">
    <label for="n">n:</label>
    <input type="text" name="n" id="n" required>
    <br>
    <label for="v">v:</label>
    <input type="text" name="v" id="v" required>
    <br>
    <input type="submit" name="submit" value="Отправить">
      </div>
   </div>
</div>
</form>
<?php 
include_once('footer.php'); 
?>
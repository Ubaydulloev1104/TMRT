<?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
include_once("session.php");
include_once("db.php");
include_once('header.php');

?>

<!-- Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<ul class="page-header-breadcrumb">
					<li><a href="/">Home</a></li>
					<li><a href="/category.php">Категории</a></li>
					<li>Добавить категорию</li>
				</ul>
				<h1>Добавить категорию</h1>
			</div>
		</div>
	</div>
</div>
<!-- /Page Header -->
</header>
<!-- /Header -->

<!-- section -->
<div class="..section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php if (!isset($_POST['Name']) && !isset($_POST['Status'])) : ?>
				<div class="col-md-5 col-md-offset-1">
					<div class="section-row">
						<h3>Добавить категорию <?= $_SESSION['login']; ?></h3>
						<form action="add_category.php" method="post">
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<span>Название</span>
										<input class="input" type="text" name="Name">
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<span>ID_user</span>
										<input class="input" type="text" name="ID_user">
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<span>Статус</span>
										<input class="input" type="checkbox" name="Status">
									</div>
								</div>
								<div class="col-md-12">
									<input type="submit" value="Submit" class="primary-button">
								</div>
							</div>
						</form>
					</div>
				</div>
			<?php else : ?>

				<?php


				if (isset($_POST['Name'])) $Name = $_POST['Name'];
				if (isset($_POST['ID_user'])) $ID_user = $_POST['ID_user'];
				if (isset($_POST['Status'])) $Status = $_POST['Status'] == "on" ? 1 : 0;


				if (!empty($Name) && !empty($ID_user) && !empty($Status)) {
					try {

						$query = "INSERT INTO Categoria(Name, Create_Data,ID_user,Status)
						 VALUES(:Name, NOW(),:ID_user, :Status)";

						$sql = $db->prepare($query);

						$data = [
							'Name' => $Name,
							'ID_user' => $ID_user,
							'Status' => $Status
						];

						$sql->execute($data);

						echo "Ok";
					} catch (PDOException $e) {
						echo $e->getMessage();
					}
				} else {
					echo "Запольните форму правильно.";
				}


				?>

			<?php endif; ?>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<?php 
include_once('footer.php'); 
?>
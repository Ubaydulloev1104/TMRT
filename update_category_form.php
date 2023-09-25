<?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
//include_once("session.php");
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
					<li>Редактировать категорию</li>
				</ul>
				<h1>Редактировать категорию</h1>
			</div>
		</div>
	</div>
</div>
<!-- /Page Header -->
</header>
<!-- /Header -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php if (isset($_GET['Create_Data'])) : ?>

				<?php

				if (!empty($_GET['Create_Data'])) {


					try {
						$query = "SELECT * FROM Categoria WHERE Create_Data = :Create_Data";

						$sql = $db->prepare($query);

						$sql->bindValue(':Create_Data', $_GET['Create_Data']);

						$sql->execute();

						if ($sql->rowCount() > 0) {
							$row = $sql->fetch(); ?>
							<div class="col-md-5 col-md-offset-1">
								<div class="section-row">
									<h3>Редактировать категорию</h3>
									<form action="update_category.php" method="post" name="updateCategory">
										<div class="row">
											<div class="col-md-7">
												<div class="form-group">
													<span>Название</span>
													<input class="input" type="text" name="Name" value="<?= $row['Name']; ?>">
													<input class="input" type="hidden" name="ID_Categoria" value="<?= $row['ID_Categoria']; ?>">
												</div>
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
											<div class="col-md-7">
												<div class="form-group">
													<span>Статус</span>
													<input class="input" type="checkbox" name="Status" <?= $row['Status'] == 1 ? 'checked' : ''; ?>>
													<div class="invalid-feedback" style="color: red; display:<?= $_SESSION['error']['Status'] ? 'block' : 'none'; ?>">
														<!-- вывод ошибок к полю статус -->
														<?= $_SESSION['error']['Status'] ? $_SESSION['error']['Status'] : ''; ?>
														<?php unset($_SESSION['error']['Status']); ?>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<input type="submit" value="Submit" class="primary-button">
											</div>
										</div>
									</form>
								</div>
							</div>

				<?php
						}
					} catch (PDOException $e) {
						echo $e->getMessage();
					}
				} else {
					echo "Введите правильный параметр";
				}
				?>
			<?php endif; ?>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<?php include_once('footer.php'); 
?>
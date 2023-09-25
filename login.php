<?php

if (session_id() == "") {
	session_start();
}

if (isset($_SESSION["id"])) {
	header("Location: index.php");
	exit;
}

include_once("db.php");
include_once("functions.php");
?>

<!-- metanit.com/php/mysql/2.1.php -->

<?php include_once('header.php') ?>

<!-- Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<ul class="page-header-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Авторизация</li>
				</ul>
				<h1>Авторизация</h1>
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
			<?php if (!isset($_POST['login']) && !isset($_POST['password'])) : ?>
				<div class="col-md-5 col-md-offset-1">
					<div class="section-row">
						<h3>Авторизация</h3>


						<?php
						
						// $password = '123';
					    // echo $password;
						// // echo '<br>';
						// $passwordHash = password_hash($password, PASSWORD_DEFAULT);
						// echo $passwordHash;
						// echo '<br>';
						// echo md5($password);
						// echo '<br>';
						// echo password_verify($password, $passwordHash);
						?>

						<form action="auth.php" method="post">
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<span>Логин</span>
										<input class="input" type="text" name="login">
										<div class="invalid-feedback" style="color: red; display:<?= $_SESSION['error']['login'] ? 'block' : 'none'; ?>">
											<!-- вывод ошибок к полю логин -->
											<?= $_SESSION['error']['login'] ? $_SESSION['error']['login'] : ''; ?>
											<?php unset($_SESSION['error']['login']); ?>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<span>Пароль</span>
										<input class="input" type="password" name="password">
										<div class="invalid-feedback" style="color: red; display:<?= $_SESSION['error']['password'] ? 'block' : 'none'; ?>">
											<!-- вывод ошибок к полю пароль -->
											<?= $_SESSION['error']['password'] ? $_SESSION['error']['password'] : ''; ?>
											<?php unset($_SESSION['error']['password']); ?>
										</div>
									</div>
								</div>

								<div class="col-md-7">
									<div class="form-group">
										<span>Запомнить меня</span>
										<input class="input" type="checkbox" name="remember">
									</div>
								</div>
								<div class="col-md-12">
									<input type="submit" value="Submit" class="primary-button">
								</div>
							</div>
						</form>
					</div>
				</div>
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
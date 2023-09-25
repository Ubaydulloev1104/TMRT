<?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
//include_once("session.php");
include_once("db.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="faq, INTUITIVE">
    <meta name="description" content="">
    <title>glavnaia</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="glavnaia.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/a86888b5-54cf-4638-b294-b61098bae9e9.jpg-output.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="glavnaia">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="glavnaia.html" data-home-page-title="glavnaia" class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="ru"><header class="u-clearfix u-custom-color-3 u-header u-sticky u-sticky-f7ff u-header" id="sec-75a2"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="768" data-image-height="768">
        <img src="images/a86888b5-54cf-4638-b294-b61098bae9e9.jpg-output.png" class="u-logo-image u-logo-image-1">
      </a><p class="u-custom-font u-font-arial u-text u-text-1">
        <span class="u-text-black">
          <font color="#ffffff">Туристическая карта Республики Таджикистана</font>
        </span>
      </p><nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-2-base" href="glavnaia.html" style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-2-base" href="putishesvia.html" style="padding: 10px 20px;">Путишетвия</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-2-base" href="posishenia.html" style="padding: 10px 20px;">Посишения</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-2-base" href="extrimalno.html" style="padding: 10px 20px;">Горы</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-2-base" href="galereya.html" target="_blank" style="padding: 10px 20px;">Галерея</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-2-base" href="kantakti.html" style="padding: 10px 20px;">Контакты</a>
</li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="glavnaia.html">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="putishesvia.html">Путишетвия</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="posishenia.html">Посишения</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="extrimalno.html">Горы</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="galereya.html" target="_blank">Галерея</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="kantakti.html">Контакты</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav></header>
<!-- Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<ul class="page-header-breadcrumb">
					<li><a href="/">Home</a></li>
					<li><a href="/post.php">Статьи</a></li>
					<li>Добавить статью</li>
				</ul>
				<h1>Добавить статью</h1>
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
			<?php if (!isset($_POST['name']) && !isset($_POST['status'])) : ?>
				<div class="col-md-5 col-md-offset-1">
					<div class="section-row">
						<h3>Добавить статью</h3>
						<form action="add_post.php" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<span>Название</span>
										<input class="input" type="text" name="name">
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<span>Текст</span>
										<textarea name="text" cols="30" rows="10"></textarea>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<span>Изображение</span>
										<input class="input" type="file" name="pic">
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<span>Категория</span>
										<select name="categoryId">
											<?php
											try {
												$sql = "SELECT * FROM category WHERE status = 1";
												$result = $db->query($sql);
												while ($row = $result->fetch()) {
													echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
												}
											} catch (PDOException $e) {
												echo $e->getMessage();
											}
											?>

										</select>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<span>Статус</span>
										<input class="input" type="checkbox" name="status">
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
				if (isset($_POST['name'])) $name = $_POST['name'];
				if (isset($_POST['color'])) $color = $_POST['color'];
				if (isset($_POST['status'])) $status = $_POST['status'] == "on" ? 1 : 0;


				if (!empty($name) && !empty($status)) {
					try {

						$query = "INSERT INTO category(name, color, status) VALUES(:name, :color, :status)";

						$sql = $db->prepare($query);

						$data = [
							'name' => $name,
							'color' => $color,
							'status' => $status
						];

						$sql->execute($data);

						echo "Ok";
						echo "<br>";

						$sql = "SELECT * FROM category";
						$result = $db->query($sql);

						debug($result);


						while ($row = $result->fetch()) {
							debug($row);
						}

						debug($row);
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

<?php //include_once('footer.php'); 
?>
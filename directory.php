<?php 

  include __DIR__."/php/index.php";

?>


<!doctype html>
<html class="no-js" lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ankr</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="apple-touch-icon" href="tile.png">
	<!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" href="css/main.css">
	<script src="js/GLOBAL_SCRIPT.js"></script>
</head>

<body>
	<header class="page-header">
		<div class="page-header__block">
			<a href="/" class="page-header__logo">
				<svg class="page-header__logo--svg" width="34" height="34" id="Layer_1"
				 data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<title>logo-header</title>
					<circle cx="256" cy="256" r="256" class="page-header__logo-border--patient" />
					<circle cx="256" cy="256" r="204.8" fill="#fff" />
					<circle id="logo-bg" cx="256" cy="256" r="170.67" class="page-header__logo-bg--patient"
					 fill-opacity="0.5" />
					<path id="logo-stroke" d="M371,262.5,359.8,246.75a8.53,8.53,0,0,0-15.42,3.91l-.17,1.4c0,.19,0,.39,0,.58l-.54,10.16a87.89,87.89,0,0,1-79.09,78V240.91h9.8a8.54,8.54,0,0,0,0-17.07h-9.8V201.43a34.13,34.13,0,1,0-17.06,0v22.41h-9.8a8.54,8.54,0,0,0,0,17.07h9.8v99.92a87.89,87.89,0,0,1-79.09-78l-.54-10.16c0-.2,0-.39-.05-.58l-.17-1.4a8.54,8.54,0,0,0-15.43-3.92L141,262.5a8.53,8.53,0,0,0,12,11.86A104.91,104.91,0,0,0,247.46,358v11.26a8.54,8.54,0,0,0,17.07,0V358a104.92,104.92,0,0,0,94.54-83.59A8.53,8.53,0,0,0,371,262.5ZM238.94,168.38a17.06,17.06,0,1,1,23.73,15.7,8.52,8.52,0,0,0-13.34,0A17.08,17.08,0,0,1,238.94,168.38Z"
					 fill="#4e4e4e" />
				</svg>
				<span class="page-header__logo--word">Ankr <span class="page-header__logo-dot page-header__logo-dot--patient"></span></span>
			</a>
			<button type="button" class="btn btn--directory page-header__btn">Répertoire</button>
		</div>

		<div class="page-header__block page-header__block--middle">
			<nav class="page-header__nav">
				<ul class="page-header__list">
					<li><a href="#" class="page-header__link">Créer</a></li>
					<li><a href="#" class="page-header__link">Modifier</a></li>
					<li><a href="#" class="page-header__link">Paramètres</a></li>
				</ul>
			</nav>
			<div class="page-header__info">
				<span class="page-header__info--name">Hôpital Riviera-Chablais</span>
				<span>Mercredi 8 Août 2018 16:53</span>
			</div>
		</div>

		<div class="page-header__block">
			<nav class="page-header__user-nav user-nav">
				<ul class="user-nav__list">
					<li>
						<a href="#">
							<svg width="20" height="20">
								<use xlink:href="#logo-upload"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg width="26" height="21">
								<use xlink:href="#logo-chat"></use>
							</svg>
						</a>
					</li>
					<li class="user-nav__notification user-nav__notification--active">
						<a href="#">
							<svg width="18" height="20">
								<use xlink:href="#logo-notification"></use>
							</svg>
						</a>
					</li>
				</ul>
				<div class="user-nav__block">
					<img src="img/woman-2.png" width="50" height="50" alt="Person Photo" class="user-nav__photo">
					<div class="user-nav__wrap">
						<h3 class="user-nav__name">J. Doe</h3>
						<span class="user-nav__position">Secretaire</span>
						<button class="user-nav__btn">
							<span>Open menu</span>
						</button>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<aside class="page-aside">
		<div class="page-aside__block">
			<div class="page-aside__logo-block">
				<a href="#">
					<img src="img/aside-logo-1.png" width="60" height="30" alt="Company Name">
				</a>
			</div>
			<div class="page-aside__logo-block">
				<a href="#">
					<img src="img/aside-logo-2.png" width="48" height="45" alt="Company Name">
				</a>
			</div>
		</div>
		<ul class="page-aside__list page-aside__block page-aside__block--middle">
			<li>
				<a href="#" class="btn--round">
					<svg width="28" height="22">
						<use xlink:href="#logo-windows"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="agenda.html" class="btn--round">
					<svg width="26" height="26">
						<use xlink:href="#logo-calendar"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="#" class="btn--round">
					<svg width="25" height="27">
						<use xlink:href="#logo-list"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="index.html" class="btn--round btn--round-directory is-active">
					<svg width="28" height="24">
						<use xlink:href="#logo-consultation"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="fiche-patient.html" class="btn--round">
					<svg width="25" height="25">
						<use xlink:href="#logo-annuaire"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="ordonnance.html" class="btn--round">
					<svg width="25" height="31">
						<use xlink:href="#logo-facturation"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="#" class="btn--round btn--round-plus">
					<svg width="20" height="20">
						<use xlink:href="#logo-plus"></use>
					</svg>
				</a>
			</li>
		</ul>

		<div class="page-aside__block">
			<footer class="page-aside__footer">
				<a href="#">
					<svg width="16" height="16">
						<use xlink:href="#logo-menu"></use>
					</svg>
				</a>
				<a href="#">
					<svg width="16" height="16">
						<use xlink:href="#logo-support"></use>
					</svg>
				</a>
			</footer>
		</div>
	</aside>

	<main class="main-content">
		<div class="main-content__block">
          <?php include __DIR__."/mvc/directory/index.php" ?>
      </div>
	</main>

	<!-- Toggle is-opened class to open popup -->
	<div class="drag-n-drop is-opene d">
		<div class="drag-n-drop__wrap">
			<header class="drag-n-drop__header">
				<h2 class="legend">uploader un fichier sur votre espace médical ankr</h2>
				<button class="btn btn--white" type="button">Fermer</button>
			</header>
			<form class="drag-n-drop__form" method="post" action="" enctype="multipart/form-data">
				<div class="drag-n-drop__input">
					<svg width="257" height="171">
						<use xlink:href="#logo-drag-drop"></use>
					</svg>
					<input class="drag-n-drop__file" type="file" name="files[]" id="drag-n-drop"
					 data-multiple-caption="{count} files selected" multiple />
					<span class="drag-n-drop__functionality">Glisser - Déposer un fichier ici
						ou</span>
					<label class="drag-n-drop__label btn btn--blue" for="drag-n-drop">Choisir
						un fichier</label>
				</div>
				<div class="drag-n-drop__uploading">Uploading&hellip;</div>
				<div class="drag-n-drop__success">Done!</div>
				<div class="drag-n-drop__error">Error! <span></span>.</div>
			</form>
		</div>
	</div>

	<script src="js/vendor/jquery-3.3.1.min.js"></script>
	<script src="js/vendor/jquery.nice-select.min.js"></script>
	<script src="js/vendor/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/modules/dragDrop.js"></script>
	<script src="js/main.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Galaktika</title>



	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="css/uikit.min.css">
	<link rel="stylesheet" href="css/components/slideshow.min.css">
	<link rel="stylesheet" href="css/components/dotnav.min.css">
	<link rel="stylesheet" href="css/components/slidenav.min.css">
	<link rel="stylesheet" href="css/components/tab">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/my-style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=d4e6eee7-7efa-4043-aaed-c08551d2d3d6&lang=ru_RU" type="text/javascript"></script>

	<script src="js/uikit.min.js"></script>
	<script src="js/components/slideshow.js"></script>
	<script src="js/jquery.inputmask.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
	
	<header class="header-top">
		<div class="uk-container uk-container-center uk-container-expand">

			<div class="uk-flex uk-flex-space-between uk-flex-middle ">
				<div class="navbar-toggle uk-hidden-large">
					<a href="#menu" class=" z-navbar-toggle" data-uk-offcanvas><span></span></a>
				</div>
				<nav class="uk-subnav uk-flex-item-1 uk-visible-large">
					<li><a href="">Нижний Новгород</a></li>
					<li class="uk-parent" data-uk-dropdown>
						<a href="">Услуги и цены</a>

						<div class="uk-dropdown uk-dropdown-nav">
							<ul class="uk-nav uk-nav-navbar">
								<li><a href="birthday.php">Дни рождения</a></li>
								<li><a href="Individual.php">Индивидуальные посещения</a></li>
								<li><a href="group.php">Групповые посещения</a></li>
								<li><a href="">Акции</a></li>
							</ul>
						</div>

					</li>
					<li><a href="reviews.php">Отзывы</a></li>
					<li><a href="contacts.php">Контакты</a></li>
					<li><a href="franchize.php">Франшиза</a></li>
				</nav>
				<div class="top-right uk-flex uk-flex-middle uk-flex-item-none">
					<div class="top-contacts">
						<div class="top-phone">
							<a href="tel:+78314146333">8 (831) 414-63-33</a>
						</div>
						<div class="top-address">ТЦ «Новая эра», 5 этаж</div>
					</div>
					<div class="top-button"><a href="#modal-order" class="uk-button" data-uk-modal>Оставить заявку</a></div>
				</div>
			</div>
		</div>
	</header>
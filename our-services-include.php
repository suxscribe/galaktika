<?php
//echo $_SERVER['REQUEST_URI'];
	//if ( '/services.php' == $_SERVER['REQUEST_URI'] ){ 
		if ( strpos($_SERVER['REQUEST_URI'],'/services.php')){ ?>
		<div class="page-services-block uk-container uk-container-center container-940" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
			<div class="uk-h1 text-stroke text-stroke_blue uk-margin-large-bottom uk-text-center">
				Наши услуги
			</div>

			<div class="uk-h2 uk-margin-bottom uk-text-center uk-margin-large-bottom">
				Проведите незабываемый праздник
				в нашем развлекательном центре!
			</div>
			<div class="services-blocks uk-grid uk-grid-small uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-1-1 uk-margin-large-bottom" data-uk-grid-match="{target:'.service-teaser'}" data-uk-grid-margin>
				<div>
					<div class="service-teaser service-birthday">
						<div class="service-name">Дни рождения</div>
						<a href="" class="uk-position-cover"></a>
					</div>
				</div>
				<div>
					<div class="service-teaser service-group">
						<div class="service-name">Групповые	посещения</div>
						<a href="" class="uk-position-cover"></a>
					</div>
				</div>
				<div>
					<div class="service-teaser service-individual">
						<div class="service-name">Индивидуальное посещение</div>
						<a href="" class="uk-position-cover"></a>
					</div>
				</div>
			</div>
			<div class="uk-text-center uk-margin-large-bottom">
				<a href="" class="uk-button uk-button-large">Оставить заявку</a>
			</div>
		</div>

<?php	} else {?>

		<div class="uk-container uk-container-center container-940 uk-margin-bottom service-container" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
			<div class="uk-h1 text-stroke text-stroke_blue uk-margin-large-bottom uk-text-center">
				Наши услуги
			</div>

			<div class="services-blocks uk-grid uk-grid-small uk-grid-width-large-1-2 uk-grid-width-1-1 uk-margin-large-bottom" data-uk-grid-match="{target:'.service-teaser'}" data-uk-grid-margin>
				<div>
					<div class="service-teaser service-group service-height">
						<?php
						if ( '/group.php' == $_SERVER['REQUEST_URI'] ) {
							echo '<div class="service-name">Дни рождения</div>';
						} else {
							echo '<div class="service-name">Групповые посещения</div>';
						}
						?>
						<a href="" class="uk-position-cover"></a>
					</div>
				</div>
				<div>
					<div class="service-teaser service-individual service-height">
						<div class="service-name">Индивидуальное посещение</div>
						<a href="" class="uk-position-cover"></a>
					</div>
				</div>
			</div>
		</div>
<?php }?>

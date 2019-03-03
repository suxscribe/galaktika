<? include 'header.php'; ?>
<div class="section-top">
	<div class="uk-container uk-container-center container-940">
		<ul class="section-top-nav uk-hidden-small">
			<li><a href="">Дни рождения</a></li>
			<li><a href="">Индивидуальные посещения</a></li>
			<li><a href="">Групповые посещения</a></li>
		</ul>
		<div class="section-top-logo">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>

	</div>
	
</div>
<div class="section-grey">
	<div class="uk-container uk-container-center container-940" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
		<div class="uk-h1 text-stroke text-stroke_blue uk-margin-large-bottom uk-text-center services-title-all">Действующие акции</div>
		<div class="slideshow-promo">
			<div class="uk-slidenav-position" data-uk-slideshow>
				<ul class="uk-slideshow">
					<li>
                        <div class="slideshow-promo-slide">
                            <div class="slide-image"><img src="images/slide-image.jpg" alt=""></div>
                            <div class="slide-content">
                                <div class="slide-title text-stroke">Скидка 33%</div>
                                <div class="slide-text">в будние дни до 15:00</div>
                                <a class="uk-button slide-button">Подробнее</a>
                            </div>
                        </div>
					</li>
					<li>
                        <div class="slideshow-promo-slide">
                            <div class="slide-image"><img src="images/slide-image.jpg" alt=""></div>
                            <div class="slide-content">
                                <div class="slide-title text-stroke">Скидка 33%</div>
                                <div class="slide-text">в будние дни до 15:00</div>
                                <a class="uk-button slide-button">Подробнее</a>
                            </div>
                        </div>
					</li>
				</ul>
				<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
				<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
				<ul class="uk-dotnav uk-flex-center">
					<li data-uk-slideshow-item="0"><a href=""></a></li>
					<li data-uk-slideshow-item="1"><a href=""></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</div>

<div class="section-white section-padding section-icons service-fix">
	<? include 'our-services-include.php'; ?>

	<? include 'service-add-include.php'; ?>

</div>

<? include 'footer.php'; ?>
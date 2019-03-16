	<footer>
		<div class="uk-container uk-container-center container-940">
			<div class="footer-logo uk-text-center">
				<img src="images/logo.png" alt="">
			</div>
			<p class="footer-text uk-text-center">Уникальный развлекательный центр в Нижнем Новгороде</p>
			<div class="footer-socials uk-text-center">
				<a href="" class="uk-icon-instagram"></a> <a href="" class="uk-icon-vk"></a>
			</div>
			<div class="footer-copyright uk-flex uk-flex-space-between">
				<div>© 2018, ООО «Галактика Приключений»</div>
				<div>Разработано в <a target="_blank" href="">THEWORKROOM</a></div>
			</div>
		</div>
	</footer>



	<div id="menu" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<ul class="uk-nav uk-nav-offcanvas" >
				<li><a href="">Нижний Новгород</a></li>
				<li class="uk-parent" data-uk-dropdown>
					<a href="services.php">Услуги и цены</a>
					<ul class="uk-nav-sub" >
						<li><a href="birthday.php">Дни рождения</a></li>
						<li><a href="Individual.php">Индивидуальные посещения</a></li>
						<li><a href="group.php">Групповые посещения</a></li>
						<li><a href="#">Акции</a></li>
					</ul>
				</li>
				<li><a href="reviews.php">Отзывы</a></li>
				<li><a href="contacts.php">Контакты</a></li>
				<li><a href="franchize.php">Франшиза</a></li>	    	
			</ul>
		</div>
	</div>

	<div id="modal-order" class="uk-modal">
		<div class="uk-modal-dialog">
			<a class="uk-modal-close uk-close"></a>
			<div class="uk-h3 uk-text-center uk-margin-large-bottom">Оставить заявку</div>
			<div class="uk-form form-franchize">
				<div class="uk-grid uk-grid-width-large-1-2 uk-grid-medium mb25" data-uk-grid-margin>
					<div>
						<div class="uk-form-row">
							<input class="input_field uk-width-1-1" type="text" placeholder="" name="name">
							<label class="input_label" for="name">Имя</label>
						</div>
					</div>
					<div>
						<div class="uk-form-row">
							<input class="input_field uk-width-1-1" type="text" placeholder="" name="city">
							<label class="input_label" for="city">Город</label>
						</div>
					</div>
					<div>
						<div class="uk-form-row">
							<input class="input_field input_phone uk-width-1-1" type="text" placeholder=""
							name="phone" required="">
							<label class="input_label" for="phone">Телефон</label>
						</div>
					</div>
					<div>
						<div class="uk-form-row">
							<input class="input_field uk-width-1-1" type="text" placeholder="" name="email">
							<label class="input_label" for="email">Электронная почта</label>
						</div>
					</div>
				</div>

				<div class="uk-form-row mb25">
					<textarea class="input_field uk-width-1-1" name="message" id="" cols="30" rows="10"></textarea>
					<label for="message" class="input_label">Сообщение</label>
				</div>
				<div class="uk-form-row uk-text-center">
					<button class="uk-button uk-button-large">Отправить</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
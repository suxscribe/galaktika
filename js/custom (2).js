
jQuery(document).ready(function() {

ymaps.ready(init);

function init() {
	var myMap = new ymaps.Map('map', {
			center: [56.319869, 43.926503],
			zoom: 13
		}),
		collection = new ymaps.GeoObjectCollection(),
		bounds = myMap.getBounds();
	/*myMap.controls.add('zoomControl', {
		left: 5,
		top: 60
	});*/
	/*add('mapTools', {
		left: 35,
		top: 60
	})*/
	var myPlacemark1 = new ymaps.Placemark([56.319869, 43.926503], {hintContent: 'на Кораблестроителей',
		balloonContent: ''}, {
		iconLayout: 'default#image',
		iconImageHref: 'images/map-marker.svg',
		iconImageSize: [45, 55],
		iconImageOffset: [-22, -27]

	});
	myMap.geoObjects.add(myPlacemark1);
	};

	$('.input_field').each(function(){
	    var $this = $(this);
	    if ($this.val() == '') {
	        $this.removeClass('input_filled');
	    } else {
	        $this.addClass('input_filled');
	    }
	});

	$('.input_field').on('input', function(){
	    var $this = $(this);
	    if ($this.val() == '') {
	        $this.removeClass('input_filled');
	    } else {
	        $this.addClass('input_filled');
	    }
	});

});
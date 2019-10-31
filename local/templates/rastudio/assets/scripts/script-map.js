$(document).ready(function () {
	/*Карта на контактах*/
	if($('#map').length){
		ymaps.ready(init);
		function init(){
		    var myMap = new ymaps.Map("map", {
		        center: [59.97182470742071, 30.32120672409305],
		        zoom: 13,
		        controls: []
		    });
		    var myPlacemark = new ymaps.Placemark([59.97532941322937,30.321977037222798], {}, {
		        iconLayout: 'default#image',
		        iconImageHref: '/local/templates/rastudio/assets/images/geo.svg',
		        iconImageSize: [45, 60],
		        iconImageOffset: [-10, -40]
		    });
		    myMap.geoObjects.add(myPlacemark);
		    myMap.behaviors.disable('scrollZoom');
		    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
			    //... отключаем перетаскивание карты
			    myMap.behaviors.disable('drag');
			}
		    var ctrlKey = false;
		    var ctrlMessVisible = false;
		    var timer;
		    // Отслеживаем скролл мыши на карте, чтобы показывать уведомление
		    myMap.events.add(['wheel', 'mousedown'], function(e) {
		        if (e.get('type') == 'wheel') {
		            if (!ctrlKey) { // Ctrl не нажат, показываем уведомление
		                $('#ymap_ctrl_display').fadeIn(300);
		                ctrlMessVisible = true;
		                clearTimeout(timer); // Очищаем таймер, чтобы продолжать показывать уведомление
		                timer = setTimeout(function() {
		                    $('#ymap_ctrl_display').fadeOut(300);
		                    ctrlMessVisible = false;
		                }, 1500);
		            }
		            else { // Ctrl нажат, скрываем сообщение
		                $('#ymap_ctrl_display').fadeOut(100);
		            }
		        }
		        if (e.get('type') == 'mousedown' && ctrlMessVisible) { // Скрываем уведомление при клике на карте
		            $('#ymap_ctrl_display').fadeOut(100);
		        }
		    });
		    // Обрабатываем нажатие на Ctrl
		    $(document).keydown(function(e) {
		        if (e.which === 17 && !ctrlKey) { // Ctrl нажат: включаем масштабирование мышью
		            ctrlKey = true;
		            myMap.behaviors.enable('scrollZoom');
		        }
		    });
		    $(document).keyup(function(e) { // Ctrl не нажат: выключаем масштабирование мышью
		        if (e.which === 17) {
		            ctrlKey = false;
		            myMap.behaviors.disable('scrollZoom');
		        }
		    });
		    $(document).keyup(function(e) { // Ctrl не нажат: выключаем масштабирование мышью
		        if (e.which === 17) {
		            ctrlKey = false;
		            myMap.behaviors.disable('scrollZoom');
		        }
		    });
		}
	}
	/*Карта на контактах Конец*/
});

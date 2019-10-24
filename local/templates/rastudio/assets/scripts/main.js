$(document).ready(function () {
	AOS.init({
		once: true
	})

	if( $(document).find('#lottie').length != 0) {
		var select = function(s) {
			if( $(document).find(s).length != 0) {
				return document.querySelector(s);
			}
		},
		animationWindow = select('#lottie'),    
			animData = {
			wrapper: animationWindow,
			animType: 'svg',
			loop: true,
			prerender: true,
			autoplay: true,
			path: 'assets/scripts/lottie/data.json'  
		}, anim;
	
		anim = bodymovin.loadAnimation(animData);
		anim.setSpeed(1);
	}
	
	if( $(document).find('#lottie2').length != 0) {
		var select = function(s) {
			return document.querySelector(s);
		},
		animationWindow = select('#lottie2'),    
			animData = {
			wrapper: animationWindow,
			animType: 'svg',
			loop: true,
			prerender: true,
			autoplay: true,
			path: 'assets/scripts/lottie2/data.json'  
		}, anim2;
	
		anim2 = bodymovin.loadAnimation(animData);
		anim2.setSpeed(1);
	}

	let hideInfoWay = $(document).find('.main-ways-item-main');
	for (let i = 0; i < hideInfoWay.length; i++) {
		hideInfoWay.eq(i).prev().removeClass('out');
		hideInfoWay.eq(i).slideUp();
	}

	resizewindow();
	$(window).resize(function(e){
		resizewindow();
	});

	$(function() {
        // Проверяем запись в куках о посещении
        // Если запись есть - ничего не происходит
        if (!$.cookie('hideModal')) {
        // если cookie не установлено появится окно
        // с задержкой 5 секунд
            var delay_popup = 7000;
            setTimeout(function() { 
            	$.fancybox.open({
				   src  : '#CookieForm',
				   type : 'inline'
				});
            }, delay_popup);
         }
         $.cookie('hideModal', true, {
       // Время хранения cookie в днях
        expires: 2,
        path: '/'
       });
    });

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
		        iconImageHref: '/assets/images/geo.svg',
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

	/*Доска проектов*/
	var goodTabContainers = $('.tasks-main');
	$('.tasks-top a').click(function () {
		goodTabContainers.fadeOut('fast');
		setTimeout(() => {
			goodTabContainers.filter(this.hash).fadeIn('fast');
		}, 210)
		$('.tasks-top a').removeClass('selected');
		$(this).addClass('selected');
		return false;
	}).filter(':first').click();
	/*Доска проектов Конец*/

	/*Кейсы анимация на карточках СПИЗЖЕНО! НЕ ТРОГАТЬ!*/
	if(screen.width > 1024){
		$(document).find(".cases-items-item-right-img").each(function() {
		    var t = $(this);
		    t.on("mousemove", function(o) {
		        var a = t.outerWidth()
		          , n = t.outerHeight()
		          , r = t.offset().left - $(window).scrollLeft()
		          , i = t.offset().top - $(window).scrollTop()
		          , s = (o.clientX - r) / a
		          , l = (o.clientY - i) / n
		          , c = 2 * (l - .5)
		          , f = (5 - 10 * s).toFixed(2)
		          , d = ((10 * l - 5).toFixed(2),
		        20 * c);
		        TweenLite.to(t, .3, {
		            scale: 1.07,
		            rotationY: f,
		            y: d
		        })
		    }),
		    t.on("mouseleave", function(e) {
		        TweenLite.to(this, .4, {
		            scale: 1,
		            rotationX: 0,
		            rotationY: 0,
		            y: 0
		        })
		    })
		})
	}
	/*Кейсы анимация на карточках Конец*/
});

$(document).on('click', '.main-banner-bot-mouse', function(){
	var $div = $(this).data('div');
	$('html, body').animate({
		scrollTop: $('#'+$div).offset().top
	}, 1000);
});

$(document).on('click', '.header-info-lang__cur', function(){
	if( !$(this).hasClass('active') ){
		$('.header-info-lang-change').fadeIn();
	} else {
		$('.header-info-lang-change').fadeOut();
	}
	$(this).toggleClass('active');
});
$(document).on('click touchend', function (e) { // событие клика по веб-документу
	var div = $('.header-info-lang-change'); // тут указываем сласс элемента
	if ( !div.is(e.target) && div.has(e.target).length === 0 && !$('.header-info-lang__cur').is(e.target) ) {
		$('.header-info-lang__cur').removeClass('active');
		$('.header-info-lang-change').fadeOut();
	}
});

/*$(document).on('click', '.main-ways-item-top', function(){
	$(this).toggleClass('out');
	$(this).next().slideToggle();
	$('.main-ways-item-top').not(this).removeClass('out').next().slideUp();
});

$(document).on('click', '.main-adv-left-item-top', function(){
	$(this).toggleClass('out');
	$(this).next().slideToggle();
	$('.main-adv-left-item-top').not(this).removeClass('out').next().slideUp();
});*/



function resizewindow() {
	let vh = window.innerHeight * 0.01;
  	document.documentElement.style.setProperty('--vh', `${vh}px`);
	if (screen.width > 767) {
		$(document).find('.main-vacancy-items-item').css('height', $(document).find('.main-vacancy-items-item:nth-child(1)').width() / 0.717 + 'px');
	    $(document).find('.main-vacancy-items-item:nth-child(3)').css('height', $(document).find('.main-vacancy-items-item:nth-child(3)').width() + 'px');
	}
	let hideInfoAdv = $(document).find('.main-adv-left-item-content');
	for (let i = 0; i < hideInfoAdv.length; i++) {
		hideInfoAdv.eq(i).prev().removeClass('out');
		hideInfoAdv.eq(i).slideUp();
	}
	$(document).find('.cases-items-item-right').css('height', $(document).find('.cases-items-item-right').width() * 0.71 + 'px');
};

/*Хедер меню*/
$(document).on('click', '.header-burger', function (e) {
	$(this).toggleClass('active');
	$(document).find('.header-menu-mobile').toggleClass('active');
	if($(this).hasClass('active')){
		$(document).find('.header-menu-mobile-col').css({
			'transition-duration': '.3s',
	    	'transition-delay': '.3s'
		});
		$('html, body').css({
			'overflow': 'hidden',
			'height': '100%'
		});
	} else {
		$(document).find('.header-menu-mobile-col').css({
			'transition-duration': '0s',
	    	'transition-delay': '0s'
		});
		$('html, body').css({
			'overflow': 'auto',
			'height': 'auto'
		});
	}
});
$(document).on('click touch', function (e) {
	var div = $('.header-menu-mobile'); // тут указываем сласс элемента
	if ( !div.is(e.target) && div.has(e.target).length === 0 && !$('.header-burger-block').is(e.target) ) {
		$(document).find('.header-burger').removeClass('active');
		$(document).find('.header-menu-mobile').removeClass('active');
		$(document).find('.header-menu-mobile-col').css({
			'transition-duration': '0s',
	    	'transition-delay': '0s'
		});
		$('html, body').css({
			'overflow': 'auto',
			'height': 'auto'
		});
	}
});
/*Хедер меню Конец*/


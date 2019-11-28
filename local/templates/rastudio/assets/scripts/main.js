$(document).ready(function () {

	/*Пасхалка*/
	if (screen.width == 666) {
		$('.wrapper').append('<div class="pasxalka" style=""><img src="/local/templates/rastudio/assets/images/pasxalka2.png"><div class="pasxalka__btn">Я не Cатана</div></div>');
		$(document).on('click', '.pasxalka__btn', function (e) {
			$('.pasxalka').hide();
		});
	}
	/*Пасхалка Конец*/

	resizewindow();
	$(window).resize(function(e){
		resizewindow();
	});

	/*Всплываха акции*/
	/*$(function() {
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
    });*/
    /*Всплываха акции Конец*/


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


	/*Кнопка наверх*/
	if ($(this).scrollTop() > 500) {
        $(document).find('.toTop').show().css('display','flex');
    };
    $('.toTop').click(function() {
	    $('body,html').animate({scrollTop:0},500);
	});
	$(document).on('scroll', function (e) {
		if ($(document).scrollTop() > 500) {
			$(document).find('.toTop').css('display','flex');
		} else {
			$(document).find('.toTop').hide();
		}
	});
	/*Кнопка наверх Конец*/


	/*Анимация писем на форме*/
	$(document).on('scroll', function (e) {
		if($('.main-project-content-left').length){
			if($(document).scrollTop() + $(window).height() - 300 > $('.main-project-content-left').offset().top ){
				if(!$('.main-project-content-left').hasClass('main-project-content-left_hello')){
					$('.main-project-content-left').addClass('main-project-content-left_hello');
				}
			}
		}
	});
	/*Анимация писем на форме Конец*/


	/*Хедер*/
	if(screen.width < 1200){
		if ($(document).scrollTop() < 20) {
	        $('.header').css('box-shadow','none');
	    } else {
	    	$('.header').css('box-shadow','1px 2px 10px rgba(0, 0, 0, 0.1)');
	    };
		$(document).on('scroll', function (e) {
			if ($(document).scrollTop() < 20) {
		        $('.header').css('box-shadow','none');
		    } else {
		    	$('.header').css('box-shadow','1px 2px 10px rgba(0, 0, 0, 0.1)');
		    };
		});
	}
	/*Хедер Конец*/
});

/*$(document).on('click', '.header-info-lang__cur', function(){
	if( !$(this).hasClass('active') ){
		$('.header-info-lang-change').fadeIn();
	} else {
		$('.header-info-lang-change').fadeOut();
	}
	$(this).toggleClass('active');
});
$(document).on('click touchend', function (e) { // событие клика по веб-документу
	let div = $('.header-info-lang-change'); // тут указываем сласс элемента
	if ( !div.is(e.target) && div.has(e.target).length === 0 && !$('.header-info-lang__cur').is(e.target) ) {
		$('.header-info-lang__cur').removeClass('active');
		$('.header-info-lang-change').fadeOut();
	}
});*/

function resizewindow() {
	let vh = window.innerHeight * 0.01;
  	document.documentElement.style.setProperty('--vh', `${vh}px`);
	if (screen.width > 767) {
		$(document).find('.main-vacancy-items-item').css('height', $(document).find('.main-vacancy-items-item:nth-child(1)').width() / 0.717 + 'px');
	    $(document).find('.main-vacancy-items-item.disabled').css('height', $(document).find('.main-vacancy-items-item.disabled').width() + 'px');
	}
	$(document).find('.cases-items-item-right').css('height', $(document).find('.cases-items-item-right').width() * 0.71 + 'px');
};


/*Хедер меню*/
if(screen.width < 1200){
	$(document).on('click', '.header-burger', function (e) {
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			$(document).find('.header-menu-mobile').addClass('active');
			$(document).find('.header-menu-mobile-col').css({
				'transition-duration': '.3s',
		    	'transition-delay': '.3s'
			});
			$('html, body').css({
				'overflow': 'hidden',
				'height': '100%'
			});
			$('.header').css({
				'position': 'fixed',
				'top': '0'
			});
		} else {
			$(document).find('.header-menu-mobile').removeClass('active');
			$(document).find('.header-menu-mobile-col').css({
				'transition-duration': '0s',
		    	'transition-delay': '0s'
			});
			$('html, body').css({
				'overflow': 'auto',
				'height': 'auto'
			});
			scrollFlag = false
		}
	});
	$(document).on('click touch', function (e) {
		var div = $('.header-menu-mobile'); // тут указываем сласс элемента
		if ( !div.is(e.target) && div.has(e.target).length === 0 && !$('.header-burger').is(e.target) && $('.header-burger').has(e.target).length === 0) {
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
}
/*Хедер меню Конец*/


/*Лайки*/
$(document).ready(function () {
	$(document).on('click','[data-entity="like"]',function (e) {
		let id = $(this).data('id');
		let $this = $(this);
		$.ajax({
			url:'?clear_cache=Y',
			type:'POST',
			data :{'AJAX':'Y',"LIKE":'Y',"ID":id},
			success:function (result) {
				$this.html($(result).html());
				$this.toggleClass('active');
			}
		});
	});
});
/*Лайки Конец*/


/*Смена заголовка в fancybox*/
$(document).on('click','.fancybox-btn-init',function (e) {
	let title = $(this)[0].title;
	$(document).find('#SendForm .vacancy-form__title').text(title)
});
/*Смена заголовка в fancybox Конец*/


/*Появление определения в блоге*/
$(document).on('click','.blogpage-bescription',function (e) {
	let title = $(this).data('title'),
		content = $(this).data('content'),
		container = $(document).find('.blogpage-content-side-descr'),
		position = $(this).offset().top - $('.blogpage-content-main').offset().top;
	container.find('.blogpage-content-side-descr__title').text(title);
	container.find('.blogpage-content-side-descr__content').text(content);
	container.css('top', position).fadeIn('fast');
});
/*Появление определения в блоге Конец*/
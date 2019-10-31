$(document).ready(function () {

	resizewindow();
	$(window).resize(function(e){
		resizewindow();
	});

	/*Всплываха акции*/
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
	if ($(this).scrollTop() > 150) {
        $(document).find('.toTop').show().css('display','flex');
    };
    $('.toTop').click(function() {
	    $('body,html').animate({scrollTop:0},500);
	});
	$(document).on('scroll', function (e) {
		if ($(document).scrollTop() > 150) {
	        $(document).find('.toTop').css('display','flex');
	    } else {
	        $(document).find('.toTop').hide();
	    }
	});
	/*Кнопка наверх Конец*/


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
	    $(document).find('.main-vacancy-items-item:nth-child(3)').css('height', $(document).find('.main-vacancy-items-item:nth-child(3)').width() + 'px');
	}
	$(document).find('.cases-items-item-right').css('height', $(document).find('.cases-items-item-right').width() * 0.71 + 'px');
};


/*Хедер меню*/
if(screen.width < 1200){
	let headerMenuHeight = $(document).find('.header-menu-mobile').height();
	$(document).ready(function () {
		$(document).find('.header-menu-mobile').css({
			'height': '0',
			'opacity': '1'
		});
	});
	$(document).on('click', '.header-burger', function (e) {
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			$(document).find('.header-menu-mobile').addClass('active').css('height', headerMenuHeight);
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
			$(document).find('.header-menu-mobile').removeClass('active').css('height', 0);
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
//лайки
$(document).ready(function () {
	$(document).on('click','[data-entity="like"]',function (e) {
		let id = $(this).data('id');
		let $this = $(this);
		$.ajax({
			url:'?clear_cache=Y',
			type:'POST',
			data :{'AJAX':'Y',"LIKE":'Y',"ID":id},
			success:function (result) {
				$this.html($(result).find('[data-entity="like"]').html());
				$this.toggleClass('active');
			}
		});
	});
});

$(document).on('click','.fancybox-btn-init',function (e) {
	let title = $(this)[0].title;
	$(document).find('#SendForm .vacancy-form__title').text(title)
});

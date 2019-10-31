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

	$(document).find('[name="tel"]').inputmask({
		mask: "+7 (999) 999-99-99",
		showMaskOnHover: false,
		showMaskOnFocus: true
	});
	$(document).find('[name="email"]').inputmask({ 
		alias: "email",
		showMaskOnHover: false,
		showMaskOnFocus: true
	});

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
});


$(document).on('change', 'input[type="file"]', function(){
	let files = this.files;
    if(sendFiles(files)){
    	$(this).siblings('label')[0].innerText = $('input[type="file"]')[0].files[0].name;
		if( $('input[type="file"]')[0].value != "" ){
			$(this).siblings('span').attr('style', 'visibility: visible;');
		} else {
			$(this).siblings('span').attr('style', 'visibility: hidden;');
		}
    }
	
});
function sendFiles(files) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MB
    if (FileSize > 20) {
        $(document).find('.vacancy-form-file span').siblings('label')[0].innerText = 'Размер файла больше 20 Мб!';
        $(document).find('.vacancy-form-file span').siblings('label').attr('style', 'color: red');
        setTimeout( () => {
            $(document).find('.vacancy-form-file span').siblings('label')[0].innerText = 'Прикрепить файл';
            $(document).find('.vacancy-form-file span').siblings('label').attr('style', 'color: rgba(0, 0, 0, 0.7);');
        }, 2000);
        return false;
    } else {
    	return true
    }
};
$(document).on('click', '.vacancy-form-file span', function(){
	$('input[type="file"]')[0].value = "";
	$(this).siblings('label')[0].innerText = 'Прикрепить файл';
	$(this).attr('style', 'visibility: hidden;');
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
$(document).on('click touchstart touchend', function (e) { // событие клика по веб-документу
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

$(document).on('blur', 'input:not(input[name="tel"]):not(input[name="email"]), textarea', function(){
    if( $(this).val() != '' ){
        $(this).addClass('input-border');
    } else {
        $(this).removeClass('input-border');
    }
});

$(document).on('blur', 'input[name="tel"], input[name="email"]', function(){
    if ( $(this).inputmask("isComplete") ){
        $(this).addClass('input-border');
    } else {
        $(this).removeClass('input-border');
    }
});


function resizewindow() {
	if (screen.width > 767) {
		$(document).find('.main-vacancy-items-item').css('height', $(document).find('.main-vacancy-items-item:nth-child(1)').width() / 0.717 + 'px');
	    $(document).find('.main-vacancy-items-item:nth-child(3)').css('height', $(document).find('.main-vacancy-items-item:nth-child(3)').width() + 'px');
	}

	let hideInfoAdv = $(document).find('.main-adv-left-item-content');
	for (let i = 0; i < hideInfoAdv.length; i++) {
		hideInfoAdv.eq(i).prev().removeClass('out');
		hideInfoAdv.eq(i).slideUp();
	}

	
};
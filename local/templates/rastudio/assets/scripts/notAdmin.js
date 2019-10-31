/*Плавные переходы*/
$(document).on('click', 'a:not([data-nolink]):not([href="javascript:void(0)"])', function (e) {
	if($(this).closest('.wrapper')){
		e.preventDefault();
		$('body').fadeOut('fast');
		setTimeout(() => {
			location.href = $(this).attr('href');
		}, 300)
	}
});
/*Плавные переходы Конец*/
$(document).on('click', 'button[type="submit"] ', function(e){
    e.preventDefault();
    let inputs = $(this).closest('form').find('input[data-required=""]'),
		temp = true;
	if( $(this).closest('form').find('input[name="tel"][data-required=""]').length != 0 ){
		if ( !$(this).closest('form').find('input[name="tel"][data-required=""]').hasClass('input-border') ) {
			$(this).closest('form').find('input[name="tel"][data-required=""]').addClass('input-err');
			temp = false;
		} else {
			$(this).closest('form').find('input[name="tel"][data-required=""]').removeClass('input-err');
		}
	}
	if( $(this).closest('form').find('input[name="email"][data-required=""]').length != 0 ){
		if ( !$(this).closest('form').find('input[name="email"][data-required=""]').hasClass('input-border') ) {
			$(this).closest('form').find('input[name="email"][data-required=""]').addClass('input-err');
				temp = false;
		} else {
			$(this).closest('form').find('input[name="email"][data-required=""]').removeClass('input-err');
		}
	}
	for (var i = 0; i < inputs.length; i++) {
		if ( !inputs.eq(i).hasClass('input-border') ) {
			inputs.eq(i).addClass('input-err');
			temp = false;
		} else {
			inputs.eq(i).removeClass('input-err');
		}
	}
	console.log(temp)
	if( temp == false ){
		return false;
	}

    dataInput = $(this).closest('form').serialize();

    $.ajax({
        type: 'POST',
        url: '../php/callBack.php',
        dataType: 'json',
        data: dataInput,
        success: () => {
            console.log(1);
            $(this).closest('form').addClass('success');
            $(this).text('Отправлено');
            $(this).closest('form').find('input').prop( "disabled", true );
            $(this).closest('form').find('textarea').prop( "disabled", true );
            setTimeout( () => {
                $(this).closest('form').removeClass('success');
                $(this).text('Связаться');
                $(this).closest('form').find('input').prop( "disabled", false ).val('');
                $(this).closest('form').find('textarea').prop( "disabled", false ).val('');
                $.fancybox.close();
                if($(this).closest('form').find('input[type="file"]').length != 0){
                    $(this).closest('form').find('input[type="file"]')[0].value = "";
                    $(this).closest('form').find('.vacancy-form-file span').siblings('label')[0].innerText = 'Прикрепить файл';
                    $(this).closest('form').find('.vacancy-form-file span').attr('style', 'visibility: hidden;');
                }
                
            }, 2000);
        }
    });
});

/*$(document).on('click', '', function(e){
    e.preventDefault();

    let inputs = $(this).closest('form').find('input[data-required=""]'),
        temp = true;
    if ( !$('input[name="tel"]').hasClass('input-border') ) {
        $('input[name="tel"]').addClass('input-err');
        temp = false;
    } else {
        $('input[name="tel"]').removeClass('input-err');
    }
    if ( !$('input[name="email"]').hasClass('input-border') ) {
        $('input[name="email"]').addClass('input-err');
        temp = false;
    } else {
        $('input[name="email"]').removeClass('input-err');
    }
    for (var i = 0; i < inputs.length; i++) {
        if ( !inputs.eq(i).hasClass('input-border') ) {
            inputs.eq(i).addClass('input-err');
            temp = false;
        } else {
            inputs.eq(i).removeClass('input-err');
        }
    }
    if( temp == false ){
        return false;
    }

    dataInput = $('.popup-form').serialize();
    $.ajax({
        type: 'POST',
        url: '../php/callBack.php',
        dataType: 'json',
        data: dataInput,
        success: function(response) {
            $('.popup-form .answer').text(response.answer);
        }
    });
});

$(document).on('click', '', function(e){
    e.preventDefault();

    let inputs = $(this).closest('form').find('input[data-required=""]'),
        temp = true;
    if ( !$('input[name="tel"]').hasClass('input-border') ) {
        $('input[name="tel"]').addClass('input-err');
        temp = false;
    } else {
        $('input[name="tel"]').removeClass('input-err');
    }
    if ( !$('input[name="email"]').hasClass('input-border') ) {
        $('input[name="email"]').addClass('input-err');
        temp = false;
    } else {
        $('input[name="email"]').removeClass('input-err');
    }
    for (var i = 0; i < inputs.length; i++) {
        if ( !inputs.eq(i).hasClass('input-border') ) {
            inputs.eq(i).addClass('input-err');
            temp = false;
        } else {
            inputs.eq(i).removeClass('input-err');
        }
    }
    if( temp == false ){
        return false;
    }

    dataInput = $('.vacancy-form').serialize();
    $.ajax({
        type: 'POST',
        url: '../php/callBack.php',
        dataType: 'json',
        data: dataInput,
        success: function(response) {
            $('.vacancy-form .answer').text(response.answer);
        }
    });
});*/
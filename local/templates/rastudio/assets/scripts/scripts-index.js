$(document).ready(function () {
	AOS.init({
		once: true
	});

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
			path: '/local/templates/rastudio/assets/scripts/lottie/data.json'  
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
			path: '/local/templates/rastudio/assets/scripts/lottie2/data.json'  
		}, anim2;
	
		anim2 = bodymovin.loadAnimation(animData);
		anim2.setSpeed(1);
	}
});

/*$(document).on('click', '.main-ways-item-top', function(){
	$(this).toggleClass('out');
	$(this).next().slideToggle();
	$('.main-ways-item-top').not(this).removeClass('out').next().slideUp();
});*/
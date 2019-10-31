$(document).ready(function () {
	/*Кейсы анимация на карточках СПИЗЖЕНО! НЕ ТРОГАТЬ!*/
	if(screen.width > 1024 && $('.cases').length){
		casesParallax();
		var updateCases = function(allmutations){
	        // allmutations — массив, и мы можем использовать соответствующие методы JavaScript.
	        allmutations.map( function(mr){
	            casesParallax();
	        });
	    },
	    updateCasesElement = document.querySelectorAll('.cases')[0],
	    updateCasesObserver = new MutationObserver(updateCases),
	    updateCasesOptions = {
	        // обязательный параметр: наблюдаем за добавлением и удалением дочерних элементов.
	        'childList': true,
	        // наблюдаем за добавлением и удалением дочерних элементов любого уровня вложенности.
	        'subtree': true
	    }
	    updateCasesObserver.observe(updateCasesElement, updateCasesOptions);
	}

	function casesParallax() {
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
	};
	/*Кейсы анимация на карточках Конец*/
});

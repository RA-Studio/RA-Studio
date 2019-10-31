/*Прогресс бар*/
$(function() {
    $(document).on("scroll resize", function() {
        var o = $(window).scrollTop() / ($(document).height() - $(window).height());
        $(".case-bottom-progress-bar").css({
            "width": (100 * o) + "%"
        });
    })
}());
/*Прогресс бар Конец*/
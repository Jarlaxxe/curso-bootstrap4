//Cuidado con jQuery: la versión slim dará errores de alguna función no definida. Usar jQuery normal
$(function () {
    var topoffset = 70; //variable altura del menu
    //smooth scrolling
    $('.nav-pills a').click(function () {
        if (location.pathname.replace(/^\//, '') ===
                this.pathname.replace(/^\//, '') &&
                location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - topoffset
                }, 500);
                return false;
            } //target.length
        } //click function
    }); //smooth scrolling
});
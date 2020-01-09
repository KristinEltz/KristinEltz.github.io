$( document ).ready(function() {
    //menu cross
    document.getElementById('x').addEventListener('click', function () {
        if (this.classList.contains('clicked')) {
            this.classList.remove('clicked');
        } else {
            this.classList.add('clicked');
        }
    });

    $("#x").click(function(){
        $(".header").toggleClass("header-gray");
    });

    //menu fixed
    var nav = $('.header');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 30) {
            nav.addClass("fixed");
        } else {
            nav.removeClass("fixed");
        }
    });

    //menu toggle
    $(".cross").click(function(){
        $(".top-menu-toggle").fadeToggle("slow", "linear");
    });

    //popup
    $('.popup').click(function() {
        $('#comeback').fadeIn(300);
    });
    $('.comeback_close').click(function() {
        $('#comeback').fadeOut(300);
    });
});
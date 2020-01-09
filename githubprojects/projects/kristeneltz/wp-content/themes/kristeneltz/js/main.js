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

    //list toggle
    $(".toggle-list").click(function(){
        $(".menu-list").slideToggle("slow");
    });

    //menu item toggle
    $(".toggle-mob-head1").click(function(){
        $(".mob-menu-subitem1").toggle();
    });
    $(".toggle-mob-head2").click(function(){
        $(".mob-menu-subitem2").toggle();
    });
    $(".footer-menu-item").click(function(){
        $(".top-menu-toggle").fadeOut();
    });
    $(".mob-menu-click-fade").click(function(){
        $(".top-menu-toggle").fadeOut();
    });

    //scroll to
    var links = document.getElementsByClassName('scroll-link');

    for (var i = 0; i < links.length; i++) {
        links[i].onclick = scroll;
    }

    function scroll(e) {
        e.preventDefault();
        var id = this.getAttribute('href').replace('#', '');
        var target = document.getElementById(id).getBoundingClientRect().top-100;
        animateScroll(target);
    }

    function animateScroll(targetHeight) {
        targetHeight = document.body.scrollHeight - window.innerHeight > targetHeight + scrollY ?
            targetHeight : document.body.scrollHeight - window.innerHeight;
        var initialPosition = window.scrollY;
        var SCROLL_DURATION = 30;
        var step_x = Math.PI / SCROLL_DURATION;
        var step_count = 0;
        requestAnimationFrame(step);
        function step() {
            if (step_count < SCROLL_DURATION) {
                requestAnimationFrame(step);
                step_count++;
                window.scrollTo(0, initialPosition + targetHeight * 0.25 * Math.pow((1 - Math.cos(step_x * step_count)), 2));
            }
        }
    }


    //popup
    $('.popup').click(function() {
        $('#comeback').fadeIn(300);
    });
    $('.comeback_close').click(function() {
        $('#comeback').fadeOut(300);
    });



    $(function() {
        $('input:radio[name="paymentType"]').change(function() {
            if (($(this).val() == 'PC') || ($(this).val() == 'AC')) {
                $(".btn-paypal").hide();
                $(".btn-yandex").show();
            } else {
                $(".btn-paypal").show();
                $(".btn-yandex").hide();
            }
        });
    });

    $(".how-to-pay-head").click(function(){
        $(".how-to-pay").slideToggle("slow");
    });


});
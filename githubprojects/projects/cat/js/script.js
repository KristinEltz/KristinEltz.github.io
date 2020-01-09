$(document).ready(function () {

//Toggle .selected class when click
    $(".item").click(function () {
        $(this).toggleClass("selected");
    });

//Detect change class
    (function () {
        var originalAddClassMethod = jQuery.fn.addClass;
        var originalRemoveClassMethod = jQuery.fn.removeClass;
        jQuery.fn.addClass = function () {
            var result = originalAddClassMethod.apply(this, arguments);
            jQuery(this).trigger('classChanged');
            return result;
        }
        jQuery.fn.removeClass = function () {
            var result = originalRemoveClassMethod.apply(this, arguments);
            jQuery(this).trigger('classChanged');
            return result;
        }
    })();

//If class changed add content
    jQuery('.item').bind('classChanged', function () {
        if ($(this).hasClass('selected')) {
            $(".cover").append('<img src="img/selected.png" alt=""/>')
        }
        else {
            $(".cover").append('<img src="img/default.png" alt=""/>')
        }
    });

});
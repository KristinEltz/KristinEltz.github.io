$(document).ready(function() {
    //фокус на поля ввода
    var focus = $(".input-wrap");
    focus.click(function() {
        $(this).find('label').focus();
        focus.removeClass('focused');
        $(this).addClass('focused');
    });
     //при клике вне поля ввода убираем фокус
    $(document).mouseup(function (e){
        if (!focus.is(e.target) && focus.has(e.target).length === 0) {
            focus.removeClass('focused');
        }
    });

        //функция замены текста
    jQuery.fn.extend({
        toggleText: function (a, b){
            var that = this;
            if (that.text() != a && that.text() != b){
                that.text(a);
            }
            else
            if (that.text() == a){
                that.text(b);
            }
            else
            if (that.text() == b){
                that.text(a);
            }
            return this;
        }
    });

    //переключение иконок соцсетей
    $( ".disable-tel" ).click(function() {
        $(".i-tel").toggleClass('i-tel-dis');
    });
    $( ".i-icq" ).click(function() {
        $(this).toggleClass('i-icq-dis');
    });
    $( ".i-skype" ).click(function() {
        $(this).toggleClass('i-skype-dis');
    });
    $( ".disable-slack" ).click(function() {
        $(".i-slack").toggleClass('i-slack-dis');
    });

    $( ".btn-disable" ).click(function() {
        $(this).parent().parent().find(".social").toggleClass('off');
        $(this).toggleText('Отключить аккаунт', 'Включить аккаунт');
    });
});

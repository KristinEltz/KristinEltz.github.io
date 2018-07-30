count_class = '.count-people';
lastpack_class = '.lastpack';
message02 = '<div class="show-message__item show-message_online"><i class="everad-sprite everad-sprite-online_user"></i><p class="show-message__info">Количество посетителей на сайте:  <span id="js-user-id3"></span></p></div>';
message03 = '<div class="show-message__item show-message_online"><i class="everad-sprite everad-sprite-callback"></i><p class="show-message__info"><span class="js-show-name"><span class="js-name"></span></span>, сделал(а) заявку на обратный звонок</p></div>';
message04 = '<div class="show-message__item show-message_call last-message"><i class="everad-sprite everad-sprite-bucket"></i><p class="show-message__info"><span style="font-size: 16px;">Осталось <span class="pacedNamed"></span> по акции<br><span style="color: red;font-size: 20px;font-weight: bold;"><span style="color: red;">5</span></span> шт.</span></p></div>';
flag_phone = true;
flag_five = true;
flag_key = true;
idleTimer = null;
idleState = false;
idleWait = 30000;
curr = $('.price_land_curr:first').text() || 'руб.';
$(document).ready(function () {
    if (parseInt($('.price_land_s1:first').text()) > 0) {
        price = parseInt($('.price_land_s1:first').text());
    } else {
        price = 0;
    }
    var cp = first_count();
    ;
    var dateNow = new Date();
    var dayNow = parseInt(dateNow.getDate());
    var lastpack = '27';
    var steppack = [4, 4, 4, 5, 5];
    if (localStorage.getItem('___cp')) {
        tm = parseInt(localStorage.getItem('___tm'));
        if (dayNow - tm == 0) {
            cp = localStorage.getItem('___cp');
            lastpack = localStorage.getItem('___lp');
        } else {
            setLS(dayNow, lastpack, steppack, cp);
        }
    } else {
        setLS(dayNow, lastpack, steppack, cp);
    }
    $(count_class).text(cp);
    $(lastpack_class).text(lastpack);
    if ($(window).width() > 991) {
        $(document).bind('keydown', function () {
            if (flag_key) {
                clearTimeout(idleTimer);
                idleState = false;
                idleTimer = setTimeout(function () {
                    flag_key = false;
                    $.magnificPopup.open({items: {src: '#pu-form', type: 'inline'}});
                    idleState = true;
                }, idleWait);
            }
        });
        $("body").trigger("keydown");
    }
    $('.show-message').on('click', function () {
        $('.show-message__item').fadeOut(100);
        setTimeout(function () {
            $('.show-message').empty();
        }, 200);
    });
    setTimeout(function () {
        popUp()
    }, 8000);
});
function first_count() {
    var d = new Date();
    var h = d.getHours();
    var m = d.getMinutes();
    var num_first = 100;
    var first_count_people = num_first + h * 12 + Math.floor(m / 5);
    return first_count_people;
}
function popUp() {
    var rp = rand(321, 769);
    localStorage.setItem('___rp', rp);
    shwMsg(message02, '', rp);
    setTimeout(function () {
        var lp = parseInt(localStorage.getItem('___lp'));
        if (lp <= 5) {
            if (flag_five) {
                shwMsg(message04, '', 0);
                flag_five = false;
                setTimeout(function () {
                    showPopupEnd();
                }, 12000);
            }
        } else {
            var sp = JSON.parse(localStorage.getItem('___sp'));
            showPopupBegin(lp, sp);
        }
    }, 12000);
};
function showPopupBegin(lp, sp) {
    var name = orderName();
    var i_curent;
    var step;
    var summ;
    var cp;
    var endpack;
    var message01;
    if ((sp.length == 2) && (flag_phone)) {
        shwMsg(message03, name, 0);
        flag_phone = false;
        setTimeout(function () {
            endpack = lp;
            showPopupBegin(endpack, sp);
        }, 13000);
    } else {
        i_curent = Math.floor(Math.random() * (sp.length));
        step = sp[i_curent];
        summ = parseInt(price) * parseInt(step);
        cp = parseInt(localStorage.getItem('___cp')) + 1;
        endpack = lp - step;
        if ((price == 0) || (price == 1)) {
            message01 = '<div class="show-message__item show-message_call"><i class="everad-sprite everad-sprite-bucket"></i><p class="show-message__info"><span class="js-show-name"><span class="js-name">' + name + '</span></span>, сделал(а) заказ полного курса</p></div>';
        } else {
            message01 = '<div class="show-message__item show-message_call"><i class="everad-sprite everad-sprite-bucket"></i><p class="show-message__info"><span class="js-show-name"><span class="js-name">' + name + '</span></span>, сделал(а) заказ на сумму <span class="x_price_current x_price">' + summ + '</span> <span class="x_currency">' + curr + '</span>, заказано <span class="bay">' + step + '</span> <span class="paced">упаковок</span><br><span class="package_left">Осталось <span class="pacedNamed"></span> по акции <br><span class="blink">' + lp + '</span> <span class="blink_me">' + endpack + '</span></span></p></div>';
        }
        sp.splice(i_curent, 1);
        localStorage.setItem('___lp', endpack);
        localStorage.setItem('___sp', JSON.stringify(sp));
        localStorage.setItem('___cp', cp);
        $(count_class).text(cp);
        $(lastpack_class).text(endpack);
        shwMsg(message01, '', 0)
        setTimeout(function () {
            if (endpack > 5) {
                showPopupBegin(endpack, sp);
            } else {
                if (flag_five) {
                    shwMsg(message04, '', 0);
                    flag_five = false;
                    setTimeout(function () {
                        showPopupEnd();
                    }, 12000);
                } else {
                    showPopupEnd();
                }
            }
        }, 13000);
    }
}
function showPopupEnd() {
    var plus = true;
    var name = '';
    setInterval(function () {
        var rnd_arr = new Array(0, 1);
        var indx = rnd_arr[Math.floor(Math.random() * (rnd_arr.length))];
        if (indx == 0) {
            kindx = rand(1, 33);
            rp = parseInt(localStorage.getItem('___rp'));
            if (plus) {
                rp = rp + kindx;
                plus = false;
            } else {
                rp = rp - kindx
                plus = true;
            }
            localStorage.setItem('___rp', rp);
            shwMsg(message02, '', rp);
        } else {
            name = orderName();
            shwMsg(message03, name, 0);
        }
    }, 13000);
}
function orderName() {
    var lastName = ['Анна', 'Алина', 'Александра', 'Елена', 'Марина', 'Ксения', 'Алена', 'Виктория', 'Маргарита', 'Дарья', 'Алла', 'Евгения', 'Антонина', 'Ирина', 'Валентина', 'Вика', 'Валерия', 'Кристина', 'Наталья', 'Катерина', 'Анастасия', 'Екатерина', 'Вероника', 'Викуся', 'Мария', 'Василиса', 'Ольга', 'Татьяна', 'Оля', 'Лилия', 'Полина', 'Юлия', 'Алёна', 'Валерий', 'Владислав', 'Владимир', 'Валентин', 'Иван', 'Вячеслав', 'Михаил', 'Сергей', 'Дмитрий', 'Дима', 'Денис', 'Евгений', 'Виталий', 'Даниил', 'Влад', 'Алексей', 'Вадим', 'Виктор', 'Олег', 'Василий', 'Антон', 'Илья', 'Павел', 'Никита', 'Максим', 'Ярослав', 'Андрей', 'Артём', 'Анатолий'];
    var firstName = ['Па*****', 'Ер*****', 'Ло****', 'Бы****', 'Ел****', 'Мо****', 'Кр*****', 'Бо****', 'Ка****', 'Бе****', 'Ры*****', 'Са*****', 'Кр*****', 'Ко****', 'Пе****', 'Со****', 'Во****', 'Бу****', 'Др****', 'Ло****', 'Со****', 'Го*****', 'Ма*****', 'Ля****', 'Ле*****', 'Во*****', 'Ло****', 'Ля****', 'Ан****', 'Пр*****', 'Ша****', 'Ма****', 'Дм****', 'Ни****', 'Пе****', 'Ко****', 'Ко****', 'Са******', 'Ма*****', 'Пе*****', 'Да*******', 'Во****', 'Гр****', 'Ко****', 'До****', 'Пу****', 'Ла****', 'Лу****', 'Шп****', 'Ши****', 'Фе****', 'Ко****', 'Ма****', 'Ди****', 'Ще******', 'Ба*****', 'Ку****', 'Ро*****', 'Во*****', 'Де*****', 'Шу****', 'Ав*****', 'Ми***', 'Ма*****', 'Ми****', 'Те*****', 'Бу*****', 'Гр*****', 'Ре*****', 'Су****', 'Тр*****', 'Га*****', 'Го****', 'Ба****', 'Жу***', 'Че*****', 'Ни****', 'Че*****', 'Як*****', 'Гл*****', 'Кр****', 'За****', 'Бе****', 'Со****', 'Ми****', 'Да****', 'Ра****', 'Вл*****', 'Ма*****', 'Пр*****', 'Ки****', 'Ша*****', 'Ко****', 'См*****', 'Ле****', 'Ни*****', 'Ре****', 'Ти*****', 'За*****', 'Гу****'];
    var ln = lastName[Math.floor(Math.random() * (lastName.length))];
    var fn = firstName[Math.floor(Math.random() * (firstName.length))];
    return ln + ' ' + fn;
}
function rand(min, max) {
    min = parseInt(min);
    max = parseInt(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function shwMsg(msg, name, onsite) {
    $('.show-message').append(msg);
    if (name != '') {
        $('.js-name').text(name);
    }
    if (onsite != 0) {
        $('#js-user-id3').text(onsite);
    }
    $('.show-message__item').fadeIn(500).delay(4000).fadeOut(500);
    setTimeout(function () {
        $('.show-message').empty();
    }, 5500);
}
function setLS(dayNow, lastpack, steppack, cp) {
    localStorage.setItem('___cp', cp);
    localStorage.setItem('___tm', dayNow);
    localStorage.setItem('___lp', lastpack);
    localStorage.setItem('___sp', JSON.stringify(steppack));
}
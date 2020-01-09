$( document ).ready(function() {
    //click background


    //select one btn
    $(".btn-oneselect").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect1").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect1").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect2").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect2").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect3").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect3").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect4").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect4").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect5").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect5").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect6").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect6").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect7").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect7").removeClass('clicked');
        $(this).addClass('clicked');
    })
    $(".btn-oneselect8").click(function(e) {
        e.preventDefault();
        $(".btn-oneselect8").removeClass('clicked');
        $(this).addClass('clicked');
    })

    //select muliple btn
    $(".btn-multiselect").click(function(e) {
        $(this).toggleClass('clicked');
    })
// --------------------------------------------------------

    //select natural or colored
    $(".select-natural").click(function(e) {
        $(".natural").show();
        $(".colored").hide();

        $(".blond-result").hide();
        $(".red-result").hide();
        $(".dark-result").hide();
        $(".henna-result").hide();

        $(".spoiled-hair-result").hide();

        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();

        e.preventDefault();
        $(".blond-select").removeClass('clicked');
        $(".red-select").removeClass('clicked');
        $(".dark-select").removeClass('clicked');
        $(".henna-select").removeClass('clicked');

        $(".spoiled-hair-select").removeClass('clicked');
        $(".donotpoiled-hair-select").removeClass('clicked');

        $(".dark-to-blond-select").removeClass('clicked');
        $(".dark-to-natural-select").removeClass('clicked');
        $(".dark-to-red-select").removeClass('clicked');
        $(".blond-to-natural-select").removeClass('clicked');
        $(".blond-to-red-select").removeClass('clicked');
        $(".blond-to-dark-select").removeClass('clicked');
        $(".red-to-natural-select").removeClass('clicked');
        $(".red-to-dark-select").removeClass('clicked');
        $(".red-to-blond-select").removeClass('clicked');
        $(".henna-to-other-select").removeClass('clicked');
        $(".donotchange-color-select").removeClass('clicked');
    })
    $(".select-colored").click(function(e) {
        $(".colored").show();
        $(".natural").hide();
    })

// --------------------------------------------------------
    //q1 result multiple
    $(".thin-hair-select").click(function(){
        $(".thin-hair-result").show();
        $(".thick-hair-result").hide();
        $(".medium-hair-result").hide();
    });
    $(".thick-hair-select").click(function(){
        $(".thin-hair-result").hide();
        $(".thick-hair-result").show();
        $(".medium-hair-result").hide();
    });
    $(".medium-hair-select").click(function(){
        $(".thin-hair-result").hide();
        $(".thick-hair-result").hide();
        $(".medium-hair-result").show();
    });

    //q2 result one
    $(".curly-hair-select").click(function(){
        $(".curly-hair-result").show();
        $(".straight-hair-result").hide();
        $(".wavy-hair-result").hide();
    });
    $(".straight-hair-select").click(function(){
        $(".curly-hair-result").hide();
        $(".straight-hair-result").show();
        $(".wavy-hair-result").hide();
    });
    $(".wavy-hair-select").click(function(){
        $(".curly-hair-result").hide();
        $(".straight-hair-result").hide();
        $(".wavy-hair-result").show();
    });

    //q3 result multiple
    $(".natural-fluffy-hair-select").click(function(){
        $(".natural-fluffy-hair-result").toggle();
        $(".no-damage-hair-select").removeClass('clicked');
    });
    $(".natural-dry-hair-select").click(function(){
        $(".natural-dry-hair-result").toggle();
        $(".no-damage-hair-select").removeClass('clicked');
    });
    $(".natural-porous-hair-select").click(function(){
        $(".natural-porous-hair-result").toggle();
        $(".no-damage-hair-select").removeClass('clicked');
    });

    $(".no-damage-hair-select").click(function(){
        $(".natural-fluffy-hair-result").hide();
        $(".natural-dry-hair-result").hide();
        $(".natural-porous-hair-result").hide();
    });
    $(".no-damage-hair-select").click(function(e) {
        e.preventDefault();
        $(".no-damage-hair-select").addClass('clicked');
        $(".natural-fluffy-hair-select").removeClass('clicked');
        $(".natural-dry-hair-select").removeClass('clicked');
        $(".natural-porous-hair-select").removeClass('clicked');
    });


    //q4 result multiple
    $(".summer-hair-select").click(function(){
        $(".summer-hair-result").toggle();
    });
    $(".winter-hair-select").click(function(){
        $(".winter-hair-result").toggle();
    });
    $(".autumn-hair-select").click(function(){
        $(".autumn-hair-result").toggle();
    });
    $(".spring-hair-select").click(function(){
        $(".spring-hair-result").toggle();
    });

    //q5 result one
    $(".supergrow-hair-select").click(function(){
        $(".supergrow-hair-result").show();
        $(".grow-hair-result").hide();
    });
    $(".grow-hair-select").click(function(){
        $(".supergrow-hair-result").hide();
        $(".grow-hair-result").show();
    });
    $(".no-grow-hair-select").click(function(){
        $(".supergrow-hair-result").hide();
        $(".grow-hair-result").hide();
    });

    //q6 result one
    $(".nohairloss-select").click(function(){
        $(".hairloss-result").hide();
    });
    $(".hairloss-select").click(function(){
        $(".hairloss-result").show();
    });

    //q7 result multiple
    $(".tomuchvolume-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".tomuchvolume-hair-result").toggle();
    });
    $(".novolume-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".novolume-hair-result").toggle();
    });
    $(".tangled-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".tangled-hair-result").toggle();
    });
    $(".gray-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".gray-hair-result").toggle();
    });
    $(".dandruff-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".dandruff-hair-result").toggle();
    });
    $(".noshine-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".noshine-hair-result").toggle();
    });
    $(".splitends-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".splitends-hair-result").toggle();
    });
    $(".brittle-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".brittle-hair-result").toggle();
    });
    $(".stopgrow-hair-select").click(function(){
        $(".no-problem-select").removeClass('clicked');
        $(".stopgrow-hair-result").toggle();
    });
    $(".no-problem-select").click(function(){
        $(".stopgrow-hair-result").hide();
        $(".brittle-hair-result").hide();
        $(".splitends-hair-result").hide();
        $(".noshine-hair-result").hide();
        $(".dandruff-hair-result").hide();
        $(".gray-hair-result").hide();
        $(".tangled-hair-result").hide();
        $(".novolume-hair-result").hide();
        $(".tomuchvolume-hair-result").hide();
    });
    $(".no-problem-select").click(function(e) {
        e.preventDefault();
        $(".no-problem-select").addClass('clicked');
        $(".stopgrow-hair-select").removeClass('clicked');
        $(".brittle-hair-select").removeClass('clicked');
        $(".splitends-hair-select").removeClass('clicked');
        $(".noshine-hair-select").removeClass('clicked');
        $(".dandruff-hair-select").removeClass('clicked');
        $(".gray-hair-select").removeClass('clicked');
        $(".tangled-hair-select").removeClass('clicked');
        $(".novolume-hair-select").removeClass('clicked');
        $(".tomuchvolume-hair-select").removeClass('clicked');
    });

    //q8 result multiple
    $(".blowdry-hair-select").click(function(){
        $(".naturaldry-hair-select").removeClass('clicked');
        $(".blowdry-hair-result").toggle();
    });
    $(".iron-hair-select").click(function(){
        $(".naturaldry-hair-select").removeClass('clicked');
        $(".iron-hair-result").toggle();
    });
    $(".naturaldry-hair-select").click(function(){
        $(".blowdry-hair-result").hide();
        $(".iron-hair-result").hide();
    });
    $(".naturaldry-hair-select").click(function(e) {
        e.preventDefault();
        $(".naturaldry-hair-select").addClass('clicked');
        $(".blowdry-hair-select").removeClass('clicked');
        $(".iron-hair-select").removeClass('clicked');
    });

    //q9 result one
    $(".pickcolor-hair-select").click(function(){
        $(".pickcolor-hair-result").show();
    });
    $(".donotchangecolor-select").click(function(){
        $(".pickcolor-hair-result").hide();
    });

    //q10 result one
    $(".blond-select").click(function(){
        $(".blond-result").show();
        $(".red-result").hide();
        $(".dark-result").hide();
        $(".henna-result").hide();
    });
    $(".red-select").click(function(){
        $(".blond-result").hide();
        $(".red-result").show();
        $(".dark-result").hide();
        $(".henna-result").hide();
    });
    $(".dark-select").click(function(){
        $(".blond-result").hide();
        $(".red-result").hide();
        $(".dark-result").show();
        $(".henna-result").hide();
    });
    $(".henna-select").click(function(){
        $(".blond-result").hide();
        $(".red-result").hide();
        $(".dark-result").hide();
        $(".henna-result").show();
    });

    //q11 result one
    $(".spoiled-hair-select").click(function(){
        $(".spoiled-hair-result").show();
    });
    $(".donotpoiled-hair-select").click(function(){
        $(".spoiled-hair-result").hide();
    });

    //q12 result one
    $(".dark-to-blond-select").click(function(){
        $(".dark-to-blond-result").show();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".dark-to-natural-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").show();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".dark-to-red-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").show();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".blond-to-natural-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").show();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".blond-to-red-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").show();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".blond-to-dark-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").show();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".red-to-natural-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").show();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".red-to-dark-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").show();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });
    $(".red-to-blond-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").show();
        $(".henna-to-other-result").hide();
    });
    $(".henna-to-other-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").show();
    });

    $(".donotchange-color-select").click(function(){
        $(".dark-to-blond-result").hide();
        $(".dark-to-natural-result").hide();
        $(".dark-to-red-result").hide();
        $(".blond-to-natural-result").hide();
        $(".blond-to-red-result").hide();
        $(".blond-to-dark-result").hide();
        $(".red-to-natural-result").hide();
        $(".red-to-dark-result").hide();
        $(".red-to-blond-result").hide();
        $(".henna-to-other-result").hide();
    });

// --------------------------------------------------------
    //show all result
    $(".btn-show-result").click(function(){
        $(".test").hide();
        $(".result").show();
        $(".result-show").show();
        $('#result .answer:visible').detach().prependTo('#result-show');
        $(".result").hide();
        $(".btn-show-result").hide();
        $("#result .block1-header").hide();


        //save to local storage
        var hideTest = $(".test").hide();
        localStorage.setItem('saveHideTest', hideTest);

        var showResult = $(".result-show").show();
        localStorage.setItem('saveShowResult', showResult);

        var htmlText = $('#result-show').html();
        localStorage.setItem('saveText', htmlText);

    });


    $('.btn-show-result').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //get from local storage

    if (localStorage.getItem("saveHideTest") === null) {

    }else{
        if(localStorage.getItem("saveHideTest") == "yes"){
            $(".test").show();
        }else{
            $(".test").hide();
        }
    }

    var showResult = localStorage.getItem('saveShowResult') === 'false' ? false : true;
    $('.result-show').toggle(showResult);


    var htmlText = localStorage.getItem('saveText');
    $('#result-show').append(htmlText);



    //btn reset result
    $(".btn-reset-result").click(function(){
        localStorage.clear();
        $(".result-show").hide();
        $(".test").show();
        location.reload();
    });

// --------------------------------------------------------
    //show btn get result
    if ($('.q1').children().hasClass("clicked")
        && $('.q2').children().hasClass("clicked")
        && $('.q3').children().hasClass("clicked")
        && $('.q4').children().hasClass("clicked")
        && $('.q5').children().hasClass("clicked")
        && $('.q6').children().hasClass("clicked")
        && $('.q7').children().hasClass("clicked")
        && $('.q8').children().hasClass("clicked")
        && $('.q9').children().hasClass("clicked")
        && $('.q10').children().hasClass("clicked")
    ){
        $(".btn-show-result").show();
    }
    else {
        $(".btn-show-result").hide();
    }


    $('.question').on('click',function(){
        if ($('.q1').children().hasClass("clicked")
            && $('.q2').children().hasClass("clicked")
            && $('.q3').children().hasClass("clicked")
            && $('.q4').children().hasClass("clicked")
            && $('.q5').children().hasClass("clicked")
            && $('.q6').children().hasClass("clicked")
            && $('.q7').children().hasClass("clicked")
            && $('.q8').children().hasClass("clicked")
            && $('.q9').children().hasClass("clicked")
            && $('.q10').children().hasClass("clicked")
        ){
            $(".btn-show-result").show();
        }
        else {
            $(".btn-show-result").hide();
        }
    });


    // --------------------------------------------------------

});
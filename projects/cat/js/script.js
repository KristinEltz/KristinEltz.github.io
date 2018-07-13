$( ".item" ).hover(
    function() {
        $(".cover").append("hover");
    }, function() {
        $( this ).removeClass( "hover" );
    }
);
$( ".item" ).click(function() {
    $( this ).append( "<img src='img/selected.png' alt=''/>" ).toggle();
});
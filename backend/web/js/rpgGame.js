/**
 * Created by Денис on 22.02.2016.
 */
window.setInterval(function() {
    var position = $('#role_player').position();
    $('#player_items').css({'left':position.left, 'top':position.top});

}, 200);
$( document ).on( "mousemove", function( event ) {
    $( "#log" ).text( "pageX: " + event.pageX + ", pageY: " + event.pageY );
});

$(('#background')).click(function(e){
    $('.obj').animate({
        left: e.pageX-130,
        top: e.pageY-110
    },600);

    setTimeout(function(){
        $('.obj').remove();
    }, 300);

    setTimeout(function(){
        $('#player_items').append('<div class="obj">');
    }, 300);
});

$(document).keydown(function(e){
    var position = $('#role_player').position();
    switch(e.keyCode){
        case 37:
            $('#role_player').css('left',position.left-20+'px');
            break;
        case 38:
            $('#role_player').css('top',position.top-20+'px');
            break;
        case 39:
            $('#role_player').css('left',position.left+20+'px');
            break;
        case 40:
            $('#role_player').css('top',position.top+20+'px');
            break;
    }
});
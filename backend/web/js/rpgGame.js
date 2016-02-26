/**
 * Created by Денис on 22.02.2016.
 */

window.setInterval(function() {
    moveEnemy($('.enemy'), $('#player_items'));
    if(collision($('.obj'), $('.enemy'))) {
        $('.enemy').css('background-color','red');
    }
    else
        console.log('NOPE');
}, 100);

$( document ).on( "mousemove", function( event ) {
    $( "#log" ).text( "pageX: " + event.pageX + ", pageY: " + event.pageY );
});

$('#background').click(function(e){
    var offset = $("#player_items").offset();

    $('.obj').animate({
        left: e.pageX - offset.left,
        top: e.pageY - offset.top
    },600);

    setTimeout(function(){
        $('.obj').remove();
    }, 600);

    setTimeout(function(){
        $('#player_items').append('<div class="obj">');
    }, 600);
});

$(document).keydown(function(e){
    var position = $('#player_items').position();

    switch(e.keyCode){
        case 37:
            $('#player_items').css('left',position.left-20+'px');
            break;
        case 38:
            $('#player_items').css('top',position.top-20+'px');
            break;
        case 39:
            $('#player_items').css('left',position.left+20+'px');
            break;
        case 40:
            $('#player_items').css('top',position.top+20+'px');
            break;
    }
});

function moveEnemy(enemy, player){
    $(enemy).css({'left':player.offset().left, 'top':player.offset().top});
}

function collision($div1, $div2) {
    var x1 = $div1.offset().left;
    var y1 = $div1.offset().top;
    var h1 = $div1.outerHeight(true);
    var w1 = $div1.outerWidth(true);
    var b1 = y1 + h1;
    var r1 = x1 + w1;
    var x2 = $div2.offset().left;
    var y2 = $div2.offset().top;
    var h2 = $div2.outerHeight(true);
    var w2 = $div2.outerWidth(true);
    var b2 = y2 + h2;
    var r2 = x2 + w2;

    if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) {
        return false;
    } else {
        return true;
    }
}
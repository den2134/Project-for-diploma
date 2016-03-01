$(document).ready(function(){
    setGame();
    $('#text-inp').one( "click", function() {
        a = Date.now();
        $('#time').text(a);
    });
});

function validateAsYouType(inputElementId)
{
    var text1 =  $('#text-main').text();
    var val = inputElementId.value;

    if(val.length <= text1.length && val == text1.substr(0, val.length)){
        $('#text-inp').css('color', 'blue');
        var txt_grn = '<span class="grn">'+text1.substr(0, val.length)+'</span>';
        $('#text-main').html($('#text-main').text().replace(text1.substr(0, val.length), txt_grn));
        animateTo($('#car'),2);
    }
    else {
        $('#text-inp').css('color', 'red')
        var txt_grn = '<span class="rd">'+text1.substr(0, val.length)+'</span>';
        $('#text-main').html($('#text-main').text().replace(text1.substr(0, val.length), txt_grn));
        animateTo($('#car'),-2);
    }
    if( val ==  text1)
    {
        $('#text-inp').css('color', '#339933')
        document.getElementById("text-inp").disabled = true;
        var b = Date.now();
        $('#time').text((b-a)/1000);
        $('#coef').text(setCoef($('#car'), $('#end')));
    }
}

function setGame(){
    $('#road').append('<div id="end"></div>');
    var length = $('#text-main').text().length;
    animateTo($('#end'),(length*2)+10);
}

function animateTo(mover, pix){
    mover.animate({
        left:'+='+pix
    },10);
}

function setCoef(fpos, lpos){
    var coef = lpos.offset().left - fpos.offset().left;
    return coef+18;
}

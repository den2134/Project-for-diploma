/*window.setInterval(function() {
    for(var i=1; i<=2; i++) {
        collision($('#player'), $('#block' + i)) ? die($('#player')) : false;
    }
    collision($('#player'),$('#finish')) ? is_win() : false;
    collision($('#player'),$('.top')) ? die($('#player')) : false;
    collision($('#player'),$('.bot')) ? die($('#player')) : false;
    collision($('#player'),$('.left')) ? die($('#player')) : false;
    collision($('#player'),$('.right')) ? die($('#player')) : false;
}, 200);

function done(){
    move($('#player'),$('#scr'));
}

function move(player, target){
    var value = target.val();

    value = value.replace(/\r|\n/g, '');
    var tTegs = value.split(',');
    var tVal = [];

    for(var i=0; i<tTegs.length; i++){
        tVal[i] = tTegs[i].split(':');
    }

    for(var i=0; i<tVal.length; i++) {
        var check = tVal[i][1].replace((/\+=|-=/),'');
        if(parseInt(check) >= 300) {
            check = 300;
            moveTo(player, tVal[i][0], tVal[i][1].replace(/[0-9]+/,check));
        }
        else{
            moveTo(player, tVal[i][0], tVal[i][1]);
        }
    }
}

function moveTo(object, teg, val){
    switch(teg){
        case 'left':
            object.animate({
                left:val,
            },1000);
            break;
        case  'top':
            object.animate({
                'top':val,
            },1000);break;
    }
}
// WORK WITH COLLISIONS
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

function die(object){
    object.css({'background-color':'red','transition':'0.8s','left':'+=0px'});
    setTimeout(function() {
        object.animate({
            'transition':'0s',
            left: '2px',
            top: '2px',
        });
        object.css({'background-color': '#ffd4a8'});
    },800);
    return false;
}

function is_win(){
    $('#ground').css({'background-color': 'green'});
    $('#btnNext').attr('type','button');
    return true;
}

    */
window.setInterval(function() {
    collision($('#player'),$('#block1')) ? die($('#player')) : false;
    collision($('#player'),$('#finish')) ? is_win() : false;
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
        var teg = tVal[i][0];
        var val = tVal[i][1];

        moveTo(player, teg, val);
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
    object.css({'background-color':'red','transition':'0.8s','left':'+=0'});
    setTimeout(function() {
        object.animate({
            'transition':'0s',
            left: '0px',
            top: '0px',
        });
        object.css({'background-color': '#ffd4a8'});
    },800);
    return false;
}

function is_win(){
    ($('#ground')).css({'background-color': 'green'});
}



/*var colLeft = val.replace(/px/g,'');
 var colLeft = colLeft.replace(/\+=|-=/g,'');

 if(/\+=/.test(val)) {
 var colPlayerLeft = player.offset().left + parseInt(colLeft);
 var colPlayerTop = player.offset().top + parseInt(colLeft);
 }
 else {
 var colPlayerLeft = player.offset().left - parseInt(colLeft);
 var colPlayerTop = player.offset().top - parseInt(colLeft);
 }

 if(teg == 'left') {
 if (($('#block1').offset().left - $('#block1').outerWidth(true)) <= colPlayerLeft) {
 die(player);
 }
 }
 else(teg == 'top')
 {
 console.log($('#block1').offset().top + $('#block1').outerHeight(true));
 console.log(colPlayerTop);
 if (($('#block1').offset().top - $('#block1').outerHeight(true)) <= colPlayerTop) {
 die(player);
 }
 }*/
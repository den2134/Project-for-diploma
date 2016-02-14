function done(){
    move($('#player'),$('#scr'));
}

function move(player, target){
    var value = target.val();

    var reg = /(left:|right:|top:|bottom:)+\+=[0-9]*px/gi;
    value = value.replace(/\r|\n/g, '');

    var tTegs = value.split(',');

    console.log(tTegs);

    var tVal = [];
    for(var i=0; i<tTegs.length; i++){
        tVal[i] = tTegs[i].split(':');
    }

    console.log(tVal);

    for(var i=0; i<tVal.length; i++) {
        //tVal[i][0] = tVal[i][0].replace('right','-left');
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
            },1000);break;
        case  'top':
            object.animate({
                'top':val,
            },1000);break;
    }
}
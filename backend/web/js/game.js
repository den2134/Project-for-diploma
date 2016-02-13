function done(){
    move($('#player'),$('#scr'));
}

function move(player, target){
    var value = target.val();

    console.log(value);

    var reg = /left:|right:|top:|bottom:|/gi;
    var tTegs = value.split(reg);

    console.log(tTegs);

    player.animate({}, 1000);
}
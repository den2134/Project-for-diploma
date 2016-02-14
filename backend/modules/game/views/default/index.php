<?php /*$this->registerJsFile('js/game.js');*/?>

<div class="game-default-index">
    <div class="container">
        <div id="check"></div>
        <div id="ground" class="col-md-10 col-sm-4 col-lg-12">
            <div id="player"></div>
            <div id="block1"></div>
            <div id="finish"></div>
        </div>
        <div class="form-group col-md-6 myform">
            <textarea type="text" class="form-control" id="scr" rows="5" name="user_scr" placeholder="Add script"></textarea>
            <input type="button" class="btn btn-success" name="sub" value="Done" onclick="done()">
        </div>
    </div>
</div>

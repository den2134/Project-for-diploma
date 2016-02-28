<div class="play-default-index">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <p id="text-main"><?= $text ?></p>
        <label>Вводите текст:</label><br>
        <p id="time"></p>
        <p id="coef"></p>
        <textarea class="form-control area-inp" name="text" id="text-inp" onkeyup='return validateAsYouType(this);' cols="30" rows="10"></textarea><br>
        <div class="col-md-12" id="road">
            <div id="car"></div>
        </div>
    </div>
</div>

<div id="modal_form"><!-- Сaмo oкнo -->
    <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
    <!-- Тут любoе сoдержимoе -->
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->

<div class="play-default-index">
    <h1>Play</h1>
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

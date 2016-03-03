<div class="play-default-index">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <p id="text-main"><?= $text ?></p>
        <label>Вводите текст:</label><br>
        <textarea class="form-control area-inp" name="text" id="text-inp" onkeyup='return validateAsYouType(this);' cols="0" rows="0"></textarea>
        <div class="col-md-12" id="road">
            <div id="car"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div id="update"">
                    <button type="submit" class="btn btn-next" onclick="updatePage()" >Продолжить</button><span>или ENTER</span>
                </div>
                <p>Лучшее время: <span id="best_time"><?= $time ?></span></p>
                <p>Текущее время:<span id="time"></span></p>
                <?= \yii\bootstrap\Html::button('Таблица лидеров', ['value' => \yii\helpers\Url::to('index.php?r=play/type/table'), 'class' => 'btn btn-default', 'id' => 'modalButton']);?>
                <?php
                    \yii\bootstrap\Modal::begin([
                        'header' => '<h4>Таблица лидеров</h4>',
                        'id' => 'modal',
                        'size' => 'modal-md'
                    ]);
                    echo "<div id='modalContent'></div>";
                \yii\bootstrap\Modal::end();
                ?>
            </div>
        </div>
    </div>
</div>
<script>
    function updatePage(){
        if($('#text-inp').is(':disabled')){
            if($('#best_time').text() > $('#time').text()) {
                $.ajax({
                    url: "<?php echo \Yii::$app->getUrlManager()->createUrl('play/type/save') ?>",
                    type: 'POST',
                    data: {
                        val: $('#time').text()
                    },
                    success: function (data) {
                        console.log(data);
                    }
                });
            }
            location.reload();
        }
        else
            location.reload();
    }
</script>

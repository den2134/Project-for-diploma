<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\modules\game\models\DBgame;
?>
<div class="col-md-4 col-sm-4 col-lg-4 myFormDDL">
    <?php
        $form = ActiveForm::begin();
        $dbItems = DBgame::getAll();
        $items = ArrayHelper::map($dbItems, 'id', 'level_name');

        echo $form->field($model, 'id')->dropDownList($items);
        echo html::submitButton('Ok',['class' => 'btn btn-default btnOk']);

        ActiveForm::end();
    ?>
</div>
<div class="game-default-index">
        <div class="col-md-10 col-sm-10 col-lg-12 main-text">
            <h3 class="lName"><?=$model['level_name']?></h3>
            <hr>
            <p class="pDescr"><?=$model['level_description']?></p>
        </div>
        <div id="ground" class="col-md-10 col-sm-10 col-lg-12">
            <div class="top"></div>
            <div class="left"></div>
            <div class="bot"></div>
            <div class="right"></div>
            <?=$model['level_code']?>
        </div>
        <div class="form-group col-md-6 myform">
            <p class="main-scr">Sample code here</p>
            <script>
                <textarea type="text" class="form-control" id="scr" rows="5" name="user_scr" placeholder="Add script"></textarea>
            </script>
            <input type="button" class="btn btn-success" name="sub" value="Done" onclick="done()">
            <?php $form = ActiveForm::begin(); ?>
            <div class="form-group">
                <?= Html::submitButton('Next', ['class' => 'btn btn-primary', 'type' => 'hidden', 'id' => 'btnNext']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
</div>
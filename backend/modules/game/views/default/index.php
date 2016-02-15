<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\modules\game\models\DBgame;
?>

<div class="game-default-index">
    <div class="container">
        <div class="form-group-sm">
            <?php
            $form = ActiveForm::begin();
            $dbItems = DBgame::find()->all();
            $items = ArrayHelper::map($dbItems, 'id', 'level_name');
            echo $form->field($model, 'id')->dropDownList($items);
            echo html::submitButton('Ok',['class' => 'btn btn-default btnOk']);
            ActiveForm::end();
            ?>
        </div>
        <?=$model['level_name']?>
        <p></p>
        <?=$model['level_description']?>
        <div id="ground" class="col-md-10 col-sm-4 col-lg-12">
            <?=$model['level_code']?>
        </div>
        <div class="form-group col-md-6 myform">
            <textarea type="text" class="form-control" id="scr" rows="5" name="user_scr" placeholder="Add script"></textarea>
            <input type="button" class="btn btn-success" name="sub" value="Done" onclick="done()">
            <?php $form = ActiveForm::begin(); ?>
            <div class="form-group">
                <?= Html::submitButton('Next', ['class' => 'btn btn-primary', 'type' => 'hidden', 'id' => 'btnNext']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
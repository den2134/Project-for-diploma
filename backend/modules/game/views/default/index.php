<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="game-default-index">
    <div class="container">
        <?=$model['level_name']?>
        <p></p>
        <?=$model['level_description']?>
        <div id="check"></div>
        <div id="ground" class="col-md-10 col-sm-4 col-lg-12">
            <?=$model['level_code']?>
        </div>
        <div class="form-group col-md-6 myform">
            <textarea type="text" class="form-control" id="scr" rows="5" name="user_scr" placeholder="Add script"></textarea>
            <input type="button" class="btn btn-success" name="sub" value="Done" onclick="done()">
            <?php $form = ActiveForm::begin(); ?>

            <div class="form-group">
                <?= Html::submitButton('Next', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
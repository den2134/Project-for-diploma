<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\game\models\DBgame */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dbgame-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'level_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'level_code')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

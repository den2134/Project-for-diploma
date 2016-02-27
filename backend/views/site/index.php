<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container">
        <div class="text-main col-md-12"><h4>Hello, <span><?=Yii::$app->user->identity->f_name.' '.Yii::$app->user->identity->l_name?></span></h4></div>
        <div class="btn-game">
            <p>Panel:</p>
            <?= Html::a('Create new string', ['/play/text'], ['class'=>'btn btn-default']) ?>
            <?= Html::a('Debug game', ['/play/'], ['class'=>'btn btn-default']) ?>
        </div>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\game\models\DBgame */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dbgames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dbgame-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

   <?/* <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'level_name',
            'level_description:ntext',
            'level_code:ntext',
        ],
    ]) */?>

    <?php foreach($model as $val) { ?>
                <div id="check"></div>
                <div id="ground" class="col-md-10 col-sm-4 col-lg-12">
                <?=$model->level_code?>
                </div>
    <?php } ?>
</div>

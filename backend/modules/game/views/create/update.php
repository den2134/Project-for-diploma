<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\game\models\DBgame */

$this->title = 'Update Dbgame: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dbgames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dbgame-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

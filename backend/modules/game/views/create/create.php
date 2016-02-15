<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\game\models\DBgame */

$this->title = 'Create Dbgame';
$this->params['breadcrumbs'][] = ['label' => 'Dbgames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dbgame-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

namespace common\modules\play\controllers;

use yii\web\Controller;
use yii\db\Expression;
use yii\db\Query;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $model = (new Query())
            ->select(['string'])
            ->from('text')
            ->orderBy(new Expression('rand()'))
            ->limit(1)->all();

        return $this->render('index', ['text' => $model[0]['string']]);
    }
}

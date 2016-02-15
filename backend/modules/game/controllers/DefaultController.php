<?php

namespace backend\modules\game\controllers;

use yii\web\Controller;
use backend\modules\game\models\DBgame;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        if(isset($_POST['DBgame']))
            return $this->render('index', ['model' => $this->getLevelId($_POST['DBgame'])]);
        else
            return $this->render('index', ['model' => $this->getLevelId(1)]);
    }

    public function getLevelId($id = 1){
        if (($model = DBgame::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function chechUser(){
        if(isset($_POST['btnNext']))
            $this->actionIndex(3);
    }
}

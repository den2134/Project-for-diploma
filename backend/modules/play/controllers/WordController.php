<?php

namespace backend\modules\play\controllers;

use Yii;
use backend\modules\play\models\Word;
use backend\modules\play\models\WordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WordController implements the CRUD actions for Word model.
 */
class WordController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Word models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Word model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Word model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Word();

        if(Yii::$app->request->isPost){
            $post = $this->checkPost(Yii::$app->request->post());
            $model->load($post);
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function checkPost($text, $len = 5){
        $str = $text['Word']['string'];
        $str = preg_replace('/[^А-Яа-я0-9\s]/u', '', $str);
        $str = preg_replace('/\b[а-яА-Я]{1,'.$len.'}\b/u', '', $str);
        $str = str_replace(array("\r\n", "\r", "\n"), '', $str);
        $str = trim($str);
        $str = $n_str = preg_replace('/\s{1,}/u',',',$str);
        $text['Word']['string'] = $str;

        return $text;
    }

    /*
     public function actionCreate()
    {
        $model = new Text();
        //if ($model->load($this->checkPost(Yii::$app->request->post())) && $model->save()) {
        if(Yii::$app->request->isPost){
        $post = $this->checkPost(Yii::$app->request->post());
        $model->load($post);
        $model->save();
        return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
        }
        public function checkPost($text){
            $text['Text']['string'] = strip_tags($text['Text']['string']);
            $text['Text']['string'] = str_replace(array("\r\n", "\r", "\n"), '', $text['Text']['string']);
            $text['Text']['string'] = substr($text['Text']['string'], 0, 350);
            $text['Text']['string'] = rtrim($text['Text']['string'], "!,.-");
            $text['Text']['string'] = substr($text['Text']['string'], 0, strrpos($text['Text']['string'], ' '));
            $text['Text']['string'] = rtrim($text['Text']['string']);
            $text['Text']['string'] = trim($text['Text']['string']);
            return $text;
}
     */

    /**
     * Updates an existing Word model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Word model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Word model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Word the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Word::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

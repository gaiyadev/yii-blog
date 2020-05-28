<?php

namespace app\controllers;
use Yii;
use app\models\TblForms;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class FormController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
     public function actionCreate()
    {
        $model = new TblNews();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


}

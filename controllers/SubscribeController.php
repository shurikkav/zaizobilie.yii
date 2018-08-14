<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Subscribe;
use app\models\SubscribeModuls;
use app\models\SubscribeForm;
use yii\db;

class SubscribeController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'inside2';
        $modelSubFrom = new SubscribeForm();
        $dataSubscribeModuls = SubscribeModuls::find()
            ->from(SubscribeModuls::tableName())
            ->select("id_unit, table, name")
            ->where(['is_vis'=>'1', 'pid'=>'0','subscribe'=>'1'])
            ->orderby('sort')
            ->all();

        return $this->render('index', compact('dataSubscribeModuls','modelSubFrom'));
    }


    public function actionUpdate()
    {
        $this->layout = 'inside2';
        $model = new SubscribeForm();
        $newmodel=Yii::$app->request->post();
        var_dump($model);
        var_dump($newmodel);
        if ($model->load(Yii::$app->request->post())) {
            //Yii::$app->session->setFlash('contactFormSubmitted');
            $model->email=$newmodel->SubscribeForm->email;
            //$model->name=Yii::$app->request->post()->name;
            //$model->param=Yii::$app->request->post()->param;
            $model->save();
            var_dump($model);
            echo "!!!";
            echo "safe";
            //return $this->refresh();
        }
        $subscribs = Subscribe::find()
            ->from(Subscribe::tableName())
            ->select("id, email, name, action")
            ->where(['action'=>'1'])
            ->all();

        //return $this->render('update', compact('model','subscribs'));
    }

}

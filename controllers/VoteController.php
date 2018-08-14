<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\db;


class VoteController extends Controller
{
    public $id;
    public $vote;

    public function actionIndex()
    {

        return "!!!!$id - $vote ";

        //$this->layout = 'index.php';
        //return $this->render('index', compact('voted'));
    }
}
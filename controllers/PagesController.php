<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.06.2018
 * Time: 10:08
 */

namespace app\controllers;


class PagesController extends AppController
{
    public function actionIndex()
    {
        return $this->render("index");
    }


}
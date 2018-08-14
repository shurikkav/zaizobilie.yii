<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\QA;

class QuestionAnswer extends Widget
{
    public $limit=10;
    function run() // Меню рубрики
    {

        $data = QA::find()
            ->from(QA::tableName())
            ->where(['is_vis'=>'1'])
            ->orderBy(['sort'=> SORT_DESC])
            ->limit($this->limit)
            ->all()
        ;

        return $this->render("QuestionAnswer",compact('data'));
    }

}
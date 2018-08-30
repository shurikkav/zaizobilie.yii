<?php
namespace app\components;

use app\models\Comments;
use yii\base\Widget;
use app\models\News;

class CommentsBlock extends Widget
{
    public $CountCommInBlock=3;
    public $IdCommRecords=41;

    function run() // Меню рубрики
    {
        $query = Comments::find()->from("core_contents")
                ->where(['id_unit'=>$this->IdCommRecords, 'is_vis'=>'1'])
                ->orderby('sort')
                ->limit($this->CountCommInBlock);
        $data = $query->All();

        return $this->render("CommentsBlock",compact('data'));
    }

}
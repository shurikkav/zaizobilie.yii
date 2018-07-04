<?php
namespace app\components;

use yii\base\Widget;
use app\models\News;

class CommentsBlock extends Widget
{
    public $CountCommInBlock=3;
    public $IdCommRecords=41;

    function run() // Меню рубрики
    {
        $query = News::find()->from("core_contents")
                ->where(['id'=>$id,'id_unit'=>$this->IdCommRecords, 'is_vis'=>'1'])
                ->orderby('Sort')
                ->limit($this->CountCommInBlock);
        $data = $query->All();


        //$connection = \Yii::$app->db;
        // получаем $CountCommInBlock записей с типом $IdCommRecords
        //$model = $connection->createCommand("Select * From core_contents where id_unit=".$this->IdCommRecords." and  is_vis=1 order by sort limit 0,".$this->CountCommInBlock);
        //$data = $model->queryAll();

        return $this->render("CommentsBlock",compact('data'));
    }

}
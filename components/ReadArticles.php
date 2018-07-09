<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Article;

class ReadArticles extends Widget
{
    function run() // Меню рубрики
    {

        $query = Article::find()->from('core_contents')->where(['id_unit' => Article::IdArticleRecords, 'is_vis'=>'1']);
        $data = $query->orderBy(['view'=> SORT_DESC])
                ->limit(3)
                ->all();
        return $this->render("ReadArticles",compact('data'));
    }

}
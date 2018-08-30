<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Joke;

class JokeBlock extends Widget
{
    public $CountJokeInBlock=1;

    function run() // Меню рубрики
    {
        $connection = \Yii::$app->db;
        // получаем одну важную тему
        $model = $connection->createCommand("Select * From core_contents where id_unit=".Joke::IdJokeRecords." and is_main=1 and is_vis=1 order by sort limit 0,".$this->CountJokeInBlock);
        $data = $model->queryAll();

        return $this->render("JokeBlock",compact('data'));
    }

}
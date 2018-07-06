<?php
namespace app\components;

use yii\base\Widget;
use yii\db;

class MainMenuWidget extends Widget {
    public $param;

    public function init()
    {
        parent::init();
        if($this->param === null){$this->param='Menu';}
    }


    public function run()
    {

        $connection = \Yii::$app->db;
        $treeModuleId = 24;

        $model = $connection->createCommand("Select `id`, `name`, `link` From core_contents where id_unit='".$treeModuleId[id_unit]."' and pid=0 and is_vis=1 order by sort");
        $menuItems = $model->queryAll();

        return $this->render('MainMenu', compact('menuItems'));

    }

}
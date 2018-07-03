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

        $model = $connection->createCommand("Select id_unit From core_units where `table`='tree'");
        $treeModuleId = $model->queryOne();

        $model = $connection->createCommand("Select `id`, `name`, `plugin` From core_contents where id_unit='".$treeModuleId[id_unit]."' and pid=0 and is_vis=1 order by sort");
        $menuItems = $model->queryAll();

        return $this->render('MainMenu', compact('menuItems'));

    }

}
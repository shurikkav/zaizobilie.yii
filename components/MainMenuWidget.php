<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Menu;

class MainMenuWidget extends Widget {
    public $param;

    public function init()
    {
        parent::init();
        if($this->param === null){$this->param='Menu';}
    }


    public function run()
    {
        $query = Menu::find()->from(Menu::tableName())
                ->where(['id_unit'=>Menu::$IdMenuRecords, 'is_vis'=>'1', 'pid'=>'0'])
                ->orderby('sort');
        $menuItems = $query->All();
        return $this->render('MainMenu', compact('menuItems'));

    }

}
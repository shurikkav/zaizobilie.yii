<?php
namespace app\components;

use app\models\Banner;
use yii\base\Widget;
use yii\db;
use app\models\Menu;

class BannerWidget extends Widget {
    public $param=array();
    public $zone;

    public function init()
    {

    }


    public function run()
    {
        $Banners = Banner::find()->from(Banner::tableName())
                ->select("*")
                ->where(['zone_id'=>$this->zone, 'active'=>'1'])
                ->orderby('sort')
                ->all();

        return $this->render('Banners', compact('Banners'));

    }

}
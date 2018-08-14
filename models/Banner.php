<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2018
 * Time: 10:16
 */

namespace app\models;

use yii\db\ActiveRecord;


class Banner extends ActiveRecord
{

     public function getBanner($zone){

        $zone=intval($zone);
        $banner = Banner::find()
            ->from(Banner::tableName())
            ->select("*")
            ->where(['active'=>'1', 'zone_id'=>$zone])
            ->limit(1)
            ->orderby('sort')
            ->all()
        ;

        if (count($banner)==0) return false;
        $banner[0]->isNewRecord=false;
        $banner[0]->updateCounters(['views' => 1]);
        $banner[0]->update(false);

        return $banner[0]->getAttribute("code");
    }

    static function tableName(){
        return "core_banners";
    }



}
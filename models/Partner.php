<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2018
 * Time: 10:16
 */

namespace app\models;

use yii\db\ActiveRecord;


class Partner extends ActiveRecord
{
    public $id;
    public $name;
    public $intro;
    public $img1;
    public $url;
    public $sort;
    public $is_vis;


    public function getPartners(){

        $partner = Partner::find()
            ->from(Partner::tableName())
            ->select("*")
            ->where(['is_vis'=>'1'])
            ->orderby('sort')
            ->all()
        ;

        if (count($partner)==0) return false;

        $this->id=$partner[0]->getAttribute("id");
        $this->name=$partner[0]->getAttribute("name");
        $this->intro=$partner[0]->getAttribute("intro");
        $this->img1=$partner[0]->getAttribute("img1");
        $this->url=$partner[0]->getAttribute("url");
        $this->sort=$partner[0]->getAttribute("sort");
        $this->is_vis=$partner[0]->getAttribute("is_vis");

        return $this;
    }

    static function tableName(){
        return "core_partner";
    }



}
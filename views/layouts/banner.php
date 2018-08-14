<?php
use app\models\Banner;
use yii\db\ActiveRecord;

$query = Banner::find()
    ->from(Banner::tableName())
    ->where(['active'=>1])
    ->groupBy('zone_id')
    ->orderBy("sort")
;
$result = $query->All();
var_dump($result);
for ($i=0; $i<count($result); $i++) {
    $zone=$result[$i]["zone_id"];
    $banner[$zone] = new Banner();
    $banner[$zone]->id=$result[$i]["id"];
    $banner[$zone]->zone_id=$result[$i]["zone_id"];
    $banner[$zone]->code=$result[$i]["code"];
    $banner[$zone]->active=$result[$i]["active"];
    $banner[$zone]->url=$result[$i]["url"];
    $banner[$zone]->views=$result[$i]["views"];
    $banner[$zone]->sort=$result[$i]["sort"];
}
return $banner;



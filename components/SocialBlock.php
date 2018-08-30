<?php
namespace app\components;

use yii\base\Widget;


class SocialBlock extends Widget
{

    function run() // Меню рубрики
    {
        return $this->render("SocialBlock");
    }

}
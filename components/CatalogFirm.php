<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Firm;

class CatalogFirm extends Widget {
    public $hostname="za-izobilie57.ru";


    function runlist() // Меню рубрики
    {
        $connectionCatalog =\Firm::getDbConnection;
        $model = $connectionCatalog->createCommand("SELECT `id`
                FROM    `projects_for_catalogs`
                WHERE   `project`='".str_replace('www.','',$this->hostname)."'
                LIMIT 1
            ");
        $data = $model->queryOne();

        echo $data->id."-!!!";
        //return $this->render("NewsBlock",compact('data'));
    }

    function getRubrikCatalogList($limitrub=10,$viewTempalte){

        $connectionCatalog = \Yii::$app->dbCatalog;
//        $connectionCatalog = Firm::getDbConnection();

        $model = $connectionCatalog->createCommand("SELECT  `name_ru`,
                `id`
                FROM    `firms_rubrics`
                WHERE   `is_vis`=1
        AND     `pid`=0
        AND     `name_ru`<>''
				ORDER BY `name_ru` ASC
				".$limit_cat);
        $data = $model->queryAll();
        var_dump($data);
        //return $this->render($viewTempalte,compact('data'));
    }
}


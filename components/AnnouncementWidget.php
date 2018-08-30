<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.08.2018
 * Time: 16:27
 */

namespace app\components;


use yii\base\Widget;
use yii\db;
use app\models\Announcement;


class AnnouncementWidget extends Widget {

    public $param;

    public function init()
    {
        parent::init();
        //if($this->param === null){$this->param='Menu';}
    }

    public function getRubrik()
    {

        $query = Announcement::find()
            ->from(Announcement::tableNameRubrik())
            ->select("*")
            ->where(['is_vis'=>'1', 'pid'=>'0','id_type'=>Announcement::getIdRubrik()])
            ->orderby('sort');

        $result = $query->All();

        if (count($result)==0) return false;
        for ($i=0; $i<count($result); $i++) {
            $this->vote[$i] = array("id"=>(int)$result[$i]["id"],"question"=>$result[$i]["title"]);
        }

        for ($i=0; $i<count($this->vote); $i++) {

            $query = Vote::find()
                ->from(Vote::tableName())
                ->select("*")
                ->where(['is_vis'=>'1', 'pid'=>$this->vote[$i]['id']])
                ->orderby('sort');
            $ans = $query->All();

            $a = array();
            foreach ($ans as $row) {
                $a[] = array("id"=>$row['id'],"text"=>$row['title'],"ans"=>$row['votes']);
            }
            $this->vote[$i]['ans'] = $a;
        }

        return true;
    }



    public function load() {

        $this->getRubrik();
         echo  $this->render('AnnouncementView', compact('vote','pathJs'));


    }

    public function run(){

        echo  $this->render('AnnouncementView', compact('vote','pathJs'));
    }


}
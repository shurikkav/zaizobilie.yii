<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Vote;

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


        if (isset($_GET['voted']) && ($_GET['voted'] == '1')) {

            echo "!!! ";
            $this->voted($_POST['id'],$_POST['vote']);
            if ($_COOKIE['voted']) {
                setcookie('voted',$_COOKIE['voted'].",".$_POST['id']);
                //echo "false";
            } else {
                setcookie('voted',$_POST['id']);
                //echo "true";
                $this->getVote();
                foreach ($this->vote as $row) {
                    if ($row['id'] == $_POST['id']) {
                        $html = "";
                        $all  = 0;
                        foreach ($row['ans'] as $a) {
                            $all += $a['ans'];
                        }
                        $html .= "<ul>";
                        $i=0;
                        foreach ($row['ans'] as $a) {
                            $pp = round(($a['ans'] / $all)*100,0);
                            $html .="<li>{$a['text']}: {$a['ans']} - ". ($pp)."% <br/>
							<div style='width:{$pp}px; background:{$this->backgrounds[$i]}; height:2px;' class='vote_line'></div>
							</li>";
                            $i++;
                        }
                        $html .= "</ul>";
                        $html .="<p>Проголосовало: ".$all."</p>";
                        echo $html;
                    }
                }
            }

        }



        if ($this->getVote()) {
            $pathJs=$this->pathJs;
            $vote=$this->vote;

            echo  $this->render('VoteWidget', compact('vote','pathJs'));
        }

    }

    public function run(){


        echo  $this->render('VoteWidget', compact('vote','pathJs'));
    }

}
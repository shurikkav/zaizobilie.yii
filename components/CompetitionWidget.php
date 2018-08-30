<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Competition;

class CompetitionWidget extends Widget {

    public $backgrounds = array("blue", "green", "red", "yellow","grey", "orange", "black");
    public $param;
    public $vote = array();
    public $voteLimit=1;
    public $pathJs="../web/js/plugin.competition.js";

    public function init()
    {
        parent::init();
        //if($this->param === null){$this->param='Menu';}
    }

    // получаем массив с данными голосования если есть активное голосование
    public function getVote()
    {

        // ищем активное голосование конкурса
        $query = Competition::find()
            ->from(Competition::tableName())
            ->select("*")
            ->where(['is_vis'=>'1', 'pid'=>'0'])
            ->limit($this->voteLimit)
            ->orderby('id');

        $result = $query->All();

        // нет активного голосования - возвращаемся
        if (count($result)==0) return false;

        // есть голосование - получаем вопрос
        for ($i=0; $i<count($result); $i++) {
            $this->vote[$i] = array("id"=>(int)$result[$i]["id"],"question"=>$result[$i]["text"]);
        }

        // есть голосование - получаем ответы
        for ($i=0; $i<count($this->vote); $i++) {

            $query = Competition::find()
                    ->from(Competition::tableName())
                    ->select("*")
                    ->where(['is_vis'=>'1', 'pid'=>$this->vote[$i]['id']])
                    ->orderby('sort');
            $ans = $query->All();
            //echo count($ans);
            $a = array();
            foreach ($ans as $row) {
                $a[] = array("id"=>$row['id'],"text"=>$row['gtext'],"ans"=>$row['count'],"pic1"=>$row['gimg1'],"pic2"=>$row['gimg2'],"podpic"=>$row['podpic']);
            }
            $this->vote[$i]['ans'] = $a;
        }
        // возвращаем массив с данными
        return true;
    }


    // записать голос в базу
    public function voted($id,$ans) {

        $connection = \Yii::$app->db;
        $connection->createCommand("UPDATE ".Competition::tableName()." SET  `count` = count+1 WHERE   `id`=$ans AND `pid`=$id ")->execute();
    }


    public function load() {

        // если логосование состоялось и переданы данные
        if (isset($_GET['competition']) && ($_GET['competition'] == '1')) {

            $this->voted($_POST['id'],$_POST['vote']);
            if ($_COOKIE['competition']) {
                setcookie('competition',$_COOKIE['competition'].",".$_POST['id']);
                //echo "false";
            } else {
                setcookie('competition',$_POST['id']);
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
            $backgrounds=$this->backgrounds;
            echo  $this->render('CompetitionWidget', compact('vote','pathJs','backgrounds'));
        }

    }

    public function run(){
        $this->load();
    }

}
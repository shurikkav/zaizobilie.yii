<?php
namespace app\components;

use yii\base\Widget;
use yii\db;
use app\models\Vote;

class VoteWidget extends Widget {

    public $backgrounds = array("blue", "green", "red", "yellow","grey", "orange", "black");
    public $param;
    public $vote = array();
    public $is_main;
    public $is_block;
    public $voteLimit=1;
    public $pathJs="../web/js/plugin.vote.js";

    public function init()
    {
        parent::init();
        //if($this->param === null){$this->param='Menu';}
    }

    // получаем массив с данными голосования если есть активное голосование
    public function getVote()
    {
       if($this->is_block==false && $this->is_main==false){$this->is_main=true;}
        if($this->is_main){$moduleis="is_main";}else{$moduleis="is_block";}
        // ищем активное голосование
        $query = Vote::find()
            ->from(Vote::tableName())
            ->select("*")
            ->where(['is_vis'=>'1', 'pid'=>'0',$moduleis=>'1'])
            ->limit($this->voteLimit)
            ->orderby('id');

        $result = $query->All();

        // нет активного голосования - возвращаемся
        if (count($result)==0) return false;

        // есть голосование - получаем вопрос
        for ($i=0; $i<count($result); $i++) {
            $this->vote[$i] = array("id"=>(int)$result[$i]["id"],"question"=>$result[$i]["title"]);
        }

        // есть голосование - получаем ответы
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
        // возвращаем массив с данными
        return true;
    }


    // записать голос в базу
    public function voted($id,$ans) {

        $connection = \Yii::$app->db;
        $connection->createCommand("UPDATE ".Vote::tableName()." SET  `votes` = votes+1 WHERE   `id`=$ans AND `pid`=$id ")->execute();
    }


    public function load() {

        // если логосование состоялось и переданы данные
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
            $backgrounds=$this->backgrounds;
            echo  $this->render('VoteWidget', compact('vote','pathJs','backgrounds'));
        }

    }

    public function run(){
        $this->load();
    }

}
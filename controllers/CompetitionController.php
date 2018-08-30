<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
//use yii\db;
use app\models\Competition;




class CompetitionController extends Controller
{

    public $backgrounds = array("blue", "green", "red", "yellow","grey", "orange", "black");
    public $vote;
    public $voteLimit=1;
    public $pathJs="../web/js/plugin.competition.js";

    public function actionIndex()
    {
        $this->layout="index";

        // показывает форму активного голосования
        if ($this->getVote()) {
            $pathJs=$this->pathJs;
            $vote=$this->vote;

        }
        return $this->render('index', compact('vote','pathJs'));
    }

    // записать голос в базу
    public function voted($id,$ans) {

        $id=intval($id);
        $ans=intval($ans);
        $connection = \Yii::$app->db;
        $connection->createCommand("UPDATE ".Competition::tableName()." SET  `count` = count+1 WHERE   `id`=$ans AND `pid`=$id ")->execute();
        //echo "UPDATE ".Competition::tableName()." SET  `count` = count+1 WHERE   `id`=$ans AND `pid`=$id ";
    }


    public function actionSave()
    {
        // показывает результат голосования
        // если логосование состоялось и переданы данные
        //$this->layout="inside2";
        $this->voted($_POST['id'], $_POST['vote']);

        $id=intval($_POST['id']);
        if (!isset(Yii::$app->request->cookies['competition'])) {
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'competition',
                'value' => $id
            ]));
        }

        //echo "true";
        $html="";
        $this->getVote();

        foreach ($this->vote as $row) {

                $html = "";
                $all = 0;
                foreach ($row['ans'] as $a) {
                    $all += $a['ans'];
                }
                $html .= "<ul>";
                $i = 0;
                foreach ($row['ans'] as $a) {
                    $pp = round(($a['ans'] / $all) * 100, 0);
                    $pic="";
                    if(strlen($a['pic1'])>0){$pic="<img src='".$a['pic1']."' border=0 alt='".$a['podpic']."'>";}
                    $html .= "<li><p>{$pic}{$a['text']}<br>{$a['ans']} - " . ($pp) . "% </p>
							<div style='width:{$pp}px; background:{$this->backgrounds[$i]}; height:4px;' class='vote_line'></div>
							</li>";
                    $i++;
                }
                $html .= "</ul>";
                $html .= "<p>Проголосовало: " . $all . "</p>";

        }
         return $html;
    }


    public function getCountVoteForID($ans){

        $connection = \Yii::$app->db;
        $model= $connection->createCommand("SELECT `count` FROM ".Competition::tableName()."  WHERE `id`=$ans  ");
        $data = $model->queryAll();
        return $data;

    }

    public function actionResult()
    {
        // показывает результат голосования
        // если логосование состоялось и переданы данные

        $this->layout="inside2";

        $this->voted($_POST['id'], $_POST['vote']);

        //setcookie('voted', $_POST['id']);
        if (!isset(Yii::$app->request->cookies['competition'])) {
            $id=intval($_POST['id']);
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'competition',
                'value' => $id
            ]));
        }
        $this->getVote();
        $vote=$this->vote;
        $pathJs=$this->pathJs;
        $backgrounds=$this->backgrounds;
        return $this->render('result', compact('vote','pathJs','backgrounds'));
    }



    public function getVote()
    {
        // ищем активное голосование
        $query = Competition::find()
            ->from(Competition::tableName())
            ->select("*")
            ->where(['is_vis'=>'1', 'pid'=>'0'])
            ->orderby('id');

        $result = $query->All();

        // нет активного голосования - возвращаемся
        if (count($result)==0) return false;

        // есть голосование - получаем вопрос
        //echo count($result);
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

            $a = array();
            foreach ($ans as $row) {
                $a[] = array("id"=>$row['id'],"text"=>$row['gtext'],"ans"=>$row['count'],"pic1"=>$row['gimg1'],"pic2"=>$row['gimg2'],"podpic"=>$row['podpic']);
            }
            $this->vote[$i]['ans'] = $a;
        }
        // возвращаем массив с данными
        //var_dump($this->vote);
        return true;
    }
}
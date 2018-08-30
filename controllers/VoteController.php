<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\db;
use app\models\Vote;




class VoteController extends Controller
{
    public $backgrounds = array("blue", "green", "red", "yellow","grey", "orange", "black");
    public $vote;
    public $is_main;
    public $is_block;
    public $voteLimit=1;
    public $pathJs="../web/js/plugin.vote.js";

    public function actionIndex()
    {
        $this->layout="inside2";

        // показывает форму активного голосования
        if ($this->getVote()) {
            $pathJs="";//$this->pathJs;
            $vote=$this->vote;

        }
        return $this->render('index', compact('vote','pathJs'));
    }

    // записать голос в базу
    public function voted($id,$ans) {

        $id=intval($id);
        $ans=intval($ans);
        $connection = \Yii::$app->db;
        $connection->createCommand("UPDATE ".Vote::tableName()." SET  `votes` = votes+1 WHERE   `id`=$ans AND `pid`=$id ")->execute();
    }


    public function actionSavevoted()
    {
        // показывает результат голосования
        // если логосование состоялось и переданы данные
        //$this->layout="inside2";
        $this->voted($_POST['id'], $_POST['vote']);
        //setcookie('voted', $_POST['id']);
        //Yii::$app->request->cookies['voted'] = new CHttpCookie('voted', intval($_POST['id']));
        $id=intval($_POST['id']);
        if (!isset(Yii::$app->request->cookies['voted'])) {
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'voted',
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
                $koof=1; // множитель для отображения линии (1- оригинал, 2- увеличиваем на 2, 3 - увеличиваем на 3)
                foreach ($row['ans'] as $a) {
                    $pp = round(($a['ans'] / $all) * 100, 0);
                    $html .= "<li>{$a['text']}: {$a['ans']} - " . ($pp) . "% <br/>
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
        $model= $connection->createCommand("SELECT votes FROM ".Vote::tableName()."  WHERE `id`=$ans  ");
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
        if (!isset(Yii::$app->request->cookies['voted'])) {
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'voted',
                'value' => $id
            ]));
        }
        $this->getVote();
        $vote=$this->vote;
        $pathJs=$this->pathJs;
        $backgrounds=$this->backgrounds;
        return $this->render('result', compact('vote','pathJs','backgrounds'));
    }



    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }


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
}
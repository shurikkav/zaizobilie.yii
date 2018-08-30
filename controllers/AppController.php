<?php

namespace app\controllers;


use app\models\Comments;
use Codeception\Step\Comment;
use yii\web\Controller;
use yii\db\ActiveRecord;
use yii\web\View;
use Yii;


class AppController extends Controller
{

    public function getUserProfile($id_user){

        $data = Yii::$app->db->createCommand('Select * from core_users where `id_user`='.$id_user.'')->queryOne();
        if(count($data)>0) {
            $param["name"] =$data["name"];
            $param["email"] =$data["email"];
            $param["thumbnail"] =$data["thumbnail"];
            return $param;
        }
        else {return "";}
    }

    public function AddUserComments($name,$email)
    {
        Yii::$app->db->createCommand()
            ->insert('core_users', [
                'name' => $name,
                'email' => $email,
                'thumbnail'=>'',
                'photo'=>'',
                'birthday'=>'12.02.2013',
                'phone'=>'0',
                'mobile'=>'0',
                'fax'=>'0',
                'url'=>'0',
                'icq'=>'0',
                'skype'=>'0',
                'facebook'=>'0',
                'vkontakte'=>'0',
                'twitter'=>'0',
                'login'=>'',
                'password'=>'',
                'domain'=>'',
                'id_group'=>'0',
                'theme'=>'0',
                'sort'=>'1',
                'is_vis'=>'1',
            ])->execute();

    }


    function getCommentsCount($id,$i=0) // Кол-во комментариев
    {

        $connection = \Yii::$app->db;

        $idcomments=41;
        $model = $connection->createCommand("Select id From core_contents where `is_vis`=1 AND `id_unit`='".$idcomments."' AND `pid`='".$id."' order by `date` DESC");
        $data = $model->queryAll();
        $i=0;
        if(count($data)>0&&!empty($data)) {
            foreach($data as $dat) {
                if($dat['id']>0) {
                    $i++;
                    $i=AppController::getCommentsCount($dat['id'],$i);
                }
            }
        }
        return $i;
    }
    function getRubricsNameArticle($id){
        $connection = \Yii::$app->db;
        $model = $connection->createCommand("Select `name` From core_rubcolumn where `is_vis`=1 AND `id`='".$id."'");
        $data = $model->queryOne();
        return $data['name'];
    }
    function getAutorName($id){
        return "";
    }
    

    function getMetaTagsContents($id){
        $query = \app\models\Menu::find()
                ->select('meta_title, meta_keywords, meta_description')
                ->from('core_contents')
                ->where(['id'=> $id, 'is_vis'=>'1']);
        $data = $query->one();
        $this->title =$data->meta_title;
        $this->registerMetaTag =[ 'name' => 'description', 'content' => $data['meta_description'] ];
        $this->registerMetaTag =[ 'name' => 'keywords', 'content' => $data['meta_keywords'] ] ;
        //$this->metaTags['keywords'] = $data['meta_keywords'];
        return $data;
    }
    
    function getMetaTagsRubcolum($id){
        $query = \app\models\Menu::find()
                ->select('name, text')
                ->from('core_rubcolumn')
                ->where(['id'=> $id, 'is_vis'=>'1']);
        $data = $query->one();
        return $data;
    }
    
}



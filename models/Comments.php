<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\User;
use yii\captcha\Captcha;
use yii\data\Pagination;
use app\controllers\AppController;


class Comments extends ActiveRecord
{
    public $name;
    public $email;
    // номер записи в базе core_unit
    const IdCommentsRecords = 41;




    public function getUserIdForEmail($email){

        $data = Comments::find()->select('id_user')->from("core_users")->where(['email'=>$email]);
        $pages = new Pagination(['totalCount' => $data->count(), 'defaultPageSize' => 10]);
        $name = $data->offset($pages->offset)
            ->one();
        return $name->id_user;
    }

    public function listCommentsForId($id){

        $query = \app\models\Comments::find()->from('core_contents')->where(['pid'=>$id]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 10]);
        $datacomments = $query->offset($pages->offset)
                            ->limit($pages->limit)
                            ->all();
        $str_return="";
        //echo "!!";
        //var_dump($datacomments);
        foreach ($datacomments as $item){

            $UserProfile=AppController::getUserProfile($item->id_user);
            $str_return.="
            <div class=\"public_item\">
                <article>
                    <!--Autor-->
                    <div id=\"authorlist\">";
                        if(strlen($UserProfile["thumbnail"])>0){
                            $str_return.="<!--Avatar published-->
                            <a href=\"/site/user/".$UserProfile["id_user"]."\">
                                <span class=\"id_user_avatar\" style=\"background-image:url(".$UserProfile["thumbnail"].");\"></span></a>";
                        }

                        $str_return.="<!--Name published-->
                        <a href=\"/site/user/".$UserProfile["id_user"]."\">
                            <p><span class=\"id_user\">".$UserProfile["name"]."</span></p> </a>
                        <!--Date published-->
                        <p><time itemprop=\"datePublished\" datetime=\"".substr($item->date_start,0,10)."\">".substr($item->date_start,0,10)."</time></p>
                    </div>
                    <!--Autor-->
        
                    <!--Text-->
                    <div id=\"textlist\">
                        ".$item->intro."
                    </div>
                    <!--Text-->
    
                </article>

            </div>";

        }
        return $str_return;
    }

    static function tableName(){
        return "core_contents";
    }
    
}
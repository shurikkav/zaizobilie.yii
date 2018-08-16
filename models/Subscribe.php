<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2018
 * Time: 10:16
 */

namespace app\models;

use yii\db\ActiveRecord;
use Yii;


class Subscribe extends ActiveRecord
{



    public function CheckEmailAndCode($email,$code){
        $model = Subscribe::find()->where(['email' => $email, 'checkcode' => $code])->one();
        //var_dump($model);
        //echo $email."-".$code;
        if(count($model)==1) {return true;}else{return false;}
    }


    public function DeleteEmailinDB($email,$code){
        $model = Subscribe::find()->where(['email' => $email, 'checkcode' => $code])->one();
        if(count($model)==1)$model->delete();
    }

    public function GetParamForEmail($param){
        $model = Subscribe::find()->where(['email' => $param["email"]])->one();
        return $model->param;
    }

    public function UpdateCheckcodeForEmail($param){
        $model = Subscribe::find()->where(['email' => $param["email"]])->one();
        $model->checkcode=$param["checkcode"];
        if($param["email"]!="" && count($model)==1){$model->update();}
    }

    public function UpdateParamForEmail($param){
        $model = Subscribe::find()->where(['email' => $param["email"],'checkcode' => $param["checkcode"]])->one();
        $model->param=implode(",", $param["param"]);
        if(count($model)==1){$model->update();}
    }

    public function setActiovationOn($email,$code){
        $model = Subscribe::find()->where(['email' => $email, 'checkcode' => $code])->one();
        $model->action=1;
        $model->update();
    }

    public function SendMailDelete($param)
    {
        $linksub="http://".$param["DomainName"]."".Yii::$app->urlManager->createUrl(['/subscribe/delete/', 'e' => $param["email"], 'c'=>$param["checkcode"]]);
        $param["htmlTextMail"]=  "<b>Здравствуйте, ".$param["name"]."!</b>
                        <p>Для подтверждения удаления почтового ящика ".$param["email"]." перейдите по ссылке ".$linksub."</p>
                        <p>Если это не Вы создали запрос на удаление почтового ящика, то просто проигнорируйте данное сообщение.</p>";
        $param["TextMail"]="Здравствуйте, ".$param["name"]."!
                    Для подтверждения удаления почтового ящика ".$param["email"]." перейдите по ссылке ".$linksub."
                    Если это не Вы создали запрос на удаление почтового ящика, то просто проигнорируйте данное сообщение.";
        $param["TitleEmail"]="Удаление подписки на сайте ".$param["DomainName"];
        Yii::$app->mailer->compose()
            ->setFrom($param["adminEmail"])
            ->setTo($param["email"])
            ->setSubject($param["TitleEmail"])
            ->setTextBody($param["TextMail"])
            ->setHtmlBody($param["htmlTextMail"])
            ->send();
    }

    public function SendMailActivation($param)
    {

        $linksub="http://".$param["DomainName"]."".Yii::$app->urlManager->createUrl(['/subscribe/activation/', 'e' => $param["email"], 'c'=>$param["checkcode"]]);
        $param["htmlTextMail"]=  "<b>Здравствуйте, ".$param["name"]."!</b>
                        <p>Для подтверждения подписки почтового ящика ".$param["email"]." перейдите по ссылке ".$linksub."</p>
                        <p>Если Вы не подписывались, то просто проигнорируйте данное сообщение.</p>";
        $param["TextMail"]="Здравствуйте, ".$param["name"]."!
                    Для подтверждения подписки почтового ящика ".$param["email"]." перейдите по ссылке ".$linksub."
                    Если Вы не подписывались, то просто проигнорируйте данное сообщение.";
        $param["TitleEmail"]="Подписка на сайте ".$param["DomainName"];
        Yii::$app->mailer->compose()
            ->setFrom($param["adminEmail"])
            ->setTo($param["email"])
            ->setSubject($param["TitleEmail"])
            ->setTextBody($param["TextMail"])
            ->setHtmlBody($param["htmlTextMail"])
            ->send();

    }

    public function SendMailChangeParam($param)
    {

        $linksub="http://".$param["DomainName"]."".Yii::$app->urlManager->createUrl(['/subscribe/edit/', 'e' => $param["email"], 'c'=>$param["checkcode"]]);
        $param["htmlTextMail"]=  "<b>Здравствуйте!</b>
                        <p>Для изменения параметров подписки почтового ящика ".$param["email"]." перейдите по ссылке ".$linksub."</p>
                        <p>Если Вы не запрашивали изменение, то просто проигнорируйте данное сообщение.</p>";
        $param["TextMail"]="Здравствуйте!
                    Для изменения параметров подписки почтового ящика ".$param["email"]." перейдите по ссылке ".$linksub."
                    Если Вы не запрашивали изменение, то просто проигнорируйте данное сообщение.";
        $param["TitleEmail"]="Изменение подписки на сайте ".$param["DomainName"];
        Yii::$app->mailer->compose()
            ->setFrom($param["adminEmail"])
            ->setTo($param["email"])
            ->setSubject($param["TitleEmail"])
            ->setTextBody($param["TextMail"])
            ->setHtmlBody($param["htmlTextMail"])
            ->send();

    }

    public function isEmailInDB($email){
        $subscribs = Subscribe::find()
            ->from(Subscribe::tableName())
            ->select("*")
            ->where(['email'=>$email])
            ->all()
            ;
        return count($subscribs);
    }

    public function getActivateForEmail($email){
        $subscribs = Subscribe::find()
            ->from(Subscribe::tableName())
            ->select("action")
            ->where(['email'=>$email])
            ->all()
        ;

        foreach ($subscribs as $item)
        {
            return $item->getAttribute('action');
        }
    }

    // таблица с почтовыми ящиками
    static function tableName(){
        return "core_subscribe";
    }


}
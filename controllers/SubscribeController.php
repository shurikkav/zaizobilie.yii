<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Subscribe;
use app\models\SubscribeModuls;
use app\models\SubscribeForm;
use Yii\mail\BaseMailer;
use yii\db;

class SubscribeController extends Controller
{
    public function actionDelete(){

        $this->layout = 'inside2';
        // иницилизация класса формы
        $modelSubFrom = new SubscribeForm();

        // если пришли данные из письма
        $email=Yii::$app->request->get("e");
        $code=Yii::$app->request->get("c");

        // если пришли данные из формы
        if ($modelSubFrom->load(Yii::$app->request->post())) {

            $param["email"] = $modelSubFrom->email;
            $param["checkcode"] = Yii::$app->request->post('_csrf');
            $param["DomainName"]=Yii::$app->params["DomainName"];
            $param["adminEmail"]=Yii::$app->params["adminEmail"];
            // обновить чеккод у почты
            Subscribe::UpdateCheckcodeForEmail($param);


            //отправить письмо для удаления
            Subscribe::SendMailDelete($param);
            $param["sendform"]=1;

        }
        elseif(isset($email) && $email!="" && isset($code) && $code!=""){
            // удаляем почту из базы и выводим сообщение
            Subscribe::DeleteEmailinDB($email,$code);
            $param["delete"]=1;
            $param["email"]=$email;
        }
        else
        {   // если просто попали на эту страницу и ничего не передавали, то создаем форму
            $param["formdelete"]=1;
        }
        //var_dump($param);
        return $this->render('delete', compact('modelSubFrom','param'));
    }


    public function actionIndex()
    {
        $this->layout = 'inside2';
        $modelSubFrom = new SubscribeForm();
        $dataSubscribeModuls = SubscribeModuls::find()
            ->from(SubscribeModuls::tableName())
            ->select("id_unit, table, name")
            ->where(['is_vis'=>'1', 'pid'=>'0','subscribe'=>'1'])
            ->orderby('sort')
            ->all();

        return $this->render('index', compact('dataSubscribeModuls','modelSubFrom'));
    }

    public function actionActivation(){
        $this->layout = 'inside2';
        $email=Yii::$app->request->get("e");
        $code=Yii::$app->request->get("c");
        if(isset($email) && $email!="" && isset($code) && $code!=""){
            Subscribe::setActiovationOn($email,$code);
        }

        return $this->render('activation', compact('email'));
    }

    public function actionAdd(){
        $this->layout = 'inside2';
        $model = new SubscribeForm();
        $modelSub=new Subscribe();

        if ($model->load(Yii::$app->request->post())) {
            $modelSub->name = $param["name"] = $model->name;
            $modelSub->email = $param["email"]=$model->email;
            $modelSub->param = implode(",", $model->param);
            $modelSub->checkcode = $param["checkcode"] = Yii::$app->request->post('_csrf');
            $param["DomainName"]=Yii::$app->params["DomainName"];
            $param["adminEmail"]=Yii::$app->params["adminEmail"];
            if (Subscribe::isEmailInDB($model->email) == 0) {
                $modelSub->save(false);
                Subscribe::SendMailActivation($param);
                return $this->render('add', compact('modelSub'));
            }
            elseif(Subscribe::getActivateForEmail($modelSub->email)==0)
            {
                Subscribe::SendMailActivation($param);
                return $this->render('add', compact('modelSub'));
            }
            else{
                return $this->render('edit', compact('model'));
            }
        }
        else{
            return $this->render('index', compact('modelSub'));
        }

    }



    public function actionEdit()
    {
        $this->layout = 'inside2';
        $modelForm = new SubscribeForm();
        $f_param=array();
        $f_param["view"]="formmail";
        $f_param["DomainName"]=Yii::$app->params["DomainName"];
        $f_param["adminEmail"]=Yii::$app->params["adminEmail"];


        if ($modelForm->load(Yii::$app->request->post()))
        {
            $f_param['email']=$modelForm->email;
            $f_param['checkcode']=Yii::$app->request->post('_csrf');
            $f_param['param']=$modelForm->param;
            $f_param['dbparam']=Subscribe::GetParamForEmail($f_param);

            Subscribe::UpdateCheckcodeForEmail($f_param);

            // если ввели только почту без параметров
            if(count($f_param['param'])==0  && Subscribe::CheckEmailAndCode($f_param["email"],$f_param["checkcode"])){
                // обновляем checkcode и отправляем письмо
                Subscribe::SendMailChangeParam($f_param);
                $f_param["view"]="mailsended";
            }
            elseif(count($f_param['param'])>0  ){
                Subscribe::UpdateParamForEmail($f_param);
                $f_param['dbparam']=$modelForm->param;
                $f_param["view"]="formchange";

            }
            else
            {
                $f_param["view"]="textnoemail";
            }

        }

        $email=Yii::$app->request->get("e");
        $code=Yii::$app->request->get("c");

        if(Subscribe::getActivateForEmail($email)==1)
        {

            $f_param["email"]=$email;
            $f_param["checkcode"]=$code;
            $f_param["dbparam"]=Subscribe::GetParamForEmail($f_param);

            $f_param["view"]="formchange";
        }


        return $this->render('edit', compact('f_param', 'modelForm'));
    }

}

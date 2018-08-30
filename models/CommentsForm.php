<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
use app\controllers\AppController;

class CommentsForm extends ActiveRecord
{
    public $name;
    public $email;
    public $message;
    public $verifyCode;
    public $id2;





    public function saveCommentsFormInBD(){

        $modelComments= new \app\models\Comments();
        $modelSubFrom = new \app\models\CommentsForm();


        if($modelSubFrom->load(Yii::$app->request->post()) && $modelSubFrom->validate() )
        {
            echo "Запись сохранена";

            $id_user=\app\models\Comments::getUserIdForEmail($modelSubFrom->email);
            if($id_user==0){
                AppController::AddUserComments($modelSubFrom->name, $modelSubFrom->email);
                 $id_user=\app\models\Comments::getUserIdForEmail($modelSubFrom->email);
            }
            $modelComments->id_unit=\app\models\Comments::IdCommentsRecords;
            $modelComments->pid=$modelSubFrom->id;
            $modelComments->name="name ".$modelSubFrom->id;
            $modelComments->subname=" ";
            $modelComments->meta_title=" ";
            $modelComments->meta_keywords=" ";
            $modelComments->meta_description=" ";
            $modelComments->intro=$modelSubFrom->message;
            $modelComments->text=" ";
            $modelComments->img0=" ";
            $modelComments->img1=" ";
            $modelComments->img2=" ";
            $modelComments->img3=" ";
            $modelComments->id_user=$id_user;
            $modelComments->source=" ";
            $modelComments->url=" ";
            $modelComments->file=" ";
            $modelComments->is_vis='1';
            $modelComments->save();

        }
        else{
            echo "Ошибка записи";
            var_dump($modelSubFrom->errors);
        }
    }

    static function tableName(){
        return "core_contents";
    }

    public function rules()
    {
        return [
            // name, email, subject and body are required
            //[['name', 'id'], 'required'],
            [['name', 'email', 'message', 'id'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
            ],
        ];
    }

    public function getFormComments($id,$action="/news/view/")
    {
        $modelSubFrom = new CommentsForm();
/*
        ?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($modelSubFrom, 'name') ?>
<?= $form->field($modelSubFrom, 'id2') ?>
<?= Html::submitButton('Login') ?>
<?php ActiveForm::end(); ?>

 <?*/
$form = ActiveForm::begin();

        echo $form->field($modelSubFrom, 'id')->hiddenInput(['value' => $id])->label(false);
                echo "<div id=\"authuser\">
                    <div id=\"namecdiv\" class=\"form_item\">
                        <span class=\"warning_item\" style=\"\"></span>";
                echo  $form->field($modelSubFrom, 'name')->textInput()->label('Имя');
                echo "</div>
                    <div id=\"emailcdiv\" class=\"form_item\">";
                echo $form->field($modelSubFrom, 'email')->Input('email')->label('E-mail');
                echo "</div>
                        </div>
                        <div id=\"commmessagediv\" class=\"form_item\">";

                echo  $form->field($modelSubFrom, 'message')
                    ->textarea(['rows'=>10,'cols'=>50])
                    ->hint("Напишите ваши мысли о публикации")
                    ->label('Сообщение');
                echo "</div>
                    <!--reCCAPTCHA-->
                    <div id=\"commcaptchadiv\" class=\"form_item\">
                        <div id=\"g-recaptcha\" data-onloadcallbackname=\"onloadCallback\" data-verifycallbackname=\"verifyCallback\">";
                echo   $form->field($modelSubFrom, 'verifyCode')->widget(Captcha::className(),
                    ['template' => '<div class="captcha_img">{image}</div>'
                        . '<a class="refreshcaptcha" href="#">'
                        . Html::img('/images/imageName.png',[]).'</a>'
                        . 'Проверочный код {input}',
                    ])->label(FALSE);
                echo "</div></div>
                               <div class=\"form_item\">";

        echo  Html::submitButton('Отправить', ['class' => 'btn btn-primary']);
        echo "</div>";
        ActiveForm::end();

    }
}
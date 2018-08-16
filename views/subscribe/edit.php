<?
use \app\controllers\AppController;
use app\models\SubscribeModuls;
use app\models\SubscribeForm;
use app\models\Subscribe;
use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="article_details" style="">


    <div class="article_header">
        <div id="ulrubrics" class="article_rubrics">
            <h3>Изменить подписку</h3>
        </div>
    </div>


<?php
// форма для изменения параметров
if($f_param["view"]=="formchange"){

    $modelSubFrom= new SubscribeForm();
    $form = ActiveForm::begin([
    'id' => 'subcribe-form',
    'action' => '/subscribe/edit',
    'options' => [
        'class' => 'form-subscribe',
        'enctype' => 'multipart/form-data'
    ]
    ]);

    echo $form->field($modelForm, 'email')->hiddenInput(['value'=>$f_param["email"]]);

    $mass=array();
    $dataSubscribeModuls = SubscribeModuls::find()
        ->from(SubscribeModuls::tableName())
        ->select("id_unit, table, name")
        ->where(['is_vis'=>'1', 'pid'=>'0','subscribe'=>'1'])
        ->orderby('sort')
        ->all();
    foreach($dataSubscribeModuls as $item){
        $id_unit=$item->getAttribute('id_unit');
        $name=$item->getAttribute('name');
        $mass[$id_unit]=$name;
    }

    $modelSubFrom->param=$f_param["dbparam"];

    echo $form->field($modelSubFrom, 'param')->checkboxList($mass, [
        'separator' => '<br>',
    ]);
?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end();?>
<?
}


// текст после отправки письма
if($f_param["view"]=="mailsended"){
    ?>
    <p>На почтовый ящик <?=$f_param["email"];?> отравлена ссылка для редактирования подписки.  Просим перейти по ссылке из письма, чтобы мы убедились, что это вы редактируете свою подписку. Спасибо!</p>
    <?
}

if($f_param["view"]=="textnoemail"){
    ?>
    <p><?=$f_param["email"];?> либо нет у нас в базе или он не активен.</p>
    <p>Вы можете подписаться <a href="/subscribe/">тут</a></p>
    <?
}


// форма для ввода почты
if($f_param["view"]=="formmail"){
?>
    <?php
    $form = ActiveForm::begin([
        'id' => 'subcribe-form-edit',
        'action' => '/subscribe/edit',
        'options' => [
            'class' => 'form-subscribe',
            'enctype' => 'multipart/form-data'
        ]
    ]);
    echo $form->field($modelForm, 'email');

    ?>
    <div class="form-group">
        <?= Html::submitButton('Изменить подписку', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end();?>
<?
}
?>





</div>
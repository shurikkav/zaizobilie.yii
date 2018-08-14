<?
use app\controllers\AppController;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="article_list" style=" ">

    <div class="article_header">
        <div id="ulrubrics" class="article_rubrics">
            <h3>Подписка</h3>
        </div>
    </div>
<?php

$form = ActiveForm::begin([
    'id' => 'subcribe-form',
    'action' => '/subscribe/update',
    'options' => [
        'class' => 'form-subscribe',
        'enctype' => 'multipart/form-data'
    ]
]);
echo $form->field($modelSubFrom, 'name');
echo $form->field($modelSubFrom, 'email');

$mass=array();
foreach($dataSubscribeModuls as $item){
    $mass[$item->getAttribute('id_unit')]=$item->getAttribute('name');
}

echo $form->field($modelSubFrom, 'param[]')->checkboxList($mass)
?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end();


?>

</div>

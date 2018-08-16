<?
use app\controllers\AppController;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="article_list" style=" ">

    <div class="article_header">
        <div id="ulrubrics" class="article_rubrics">
            <h1>Подписка</h1>
        </div>
    </div>
    <h2>Подписаться на рассылку</h2>

<?php

$form = ActiveForm::begin([
    'id' => 'subcribe-form',
    'action' => '/subscribe/add',
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
        <?= Html::submitButton('Подписаться', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end();?>



<hr>
<h2>Изменить рассылку</h2>
    <?php
    $form = ActiveForm::begin([
        'id' => 'subcribe-form-edit',
        'action' => '/subscribe/edit',
        'options' => [
            'class' => 'form-subscribe',
            'enctype' => 'multipart/form-data'
        ]
    ]);
    echo $form->field($modelSubFrom, 'email');

    ?>
    <div class="form-group">
        <?= Html::submitButton('Изменить подписку', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end();?>



    <hr>
    <h2>Отписаться</h2>

    <?php
    $form = ActiveForm::begin([
    'id' => 'subcribe-form-delete',
    'action' => '/subscribe/delete',
    'options' => [
    'class' => 'form-subscribe',
    'enctype' => 'multipart/form-data'
    ]
    ]);
    echo $form->field($modelSubFrom, 'email');

    ?>
    <div class="form-group">
        <?= Html::submitButton('Отписаться', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end();?>

</div>

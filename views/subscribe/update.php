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
echo "Model<br>";
var_dump($model);



$form = ActiveForm::begin([
    'id' => 'subcribe-form',
    'action' => '/subscribe/update',
    'options' => [
        'class' => 'form-subscribe',
        'enctype' => 'multipart/form-data'
    ]
]);
echo $form->field($model, 'name');
echo $form->field($model, 'email');

$mass=array();
foreach($subscribs as $item){
    $mass[$item->id_unit]=$item->name;

}

echo $form->field($model, 'param[]')->checkboxList($mass)
?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end();


?>

</div>

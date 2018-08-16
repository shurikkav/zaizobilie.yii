<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<article class="aside_item wrap_bottom">

    <div class="article_header">
        <div id="ulrubrics" class="article_rubrics">
            <h3>Отписаться от рассылки</h3>
        </div>
    </div>


<?if($param["formdelete"]==1){

    $form = ActiveForm::begin([
    'id' => 'subcribe-form',
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


<?}?>

    <?if($param["delete"]==1){?>
    <p>Почтовый адрес <?=$param["email"];?> удален из базы рассылки.</p>
<?}?>

<?if($param["sendform"]==1){?>
    <p>На почтовый адрес <?=$param["email"];?> отправлено письмо с ссылкой для удаления из базы рассылки.</p>

<?}?>
</article>
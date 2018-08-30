<?
use app\controllers\AppController;
?>

<div class="joke_list" style=" ">

    <div class="joke_header">
        <div id="ulrubrics" class="joke_rubrics">
            <h3>Анекдоты</h3>
        </div>
    </div>
<br>

<?
//var_dump($data);
foreach ($data as $row) {?>
    <!-- Письмо 1-->
    <div class="public_item ads wrap_left wrap_right wrap_main">
        <article>
            <div class="joke_content">
                    <h2><?=$row->name;?></h2>
                    <span class="intro"><p><?=$row->text;?><p></span>
            </div>
        </article>
    </div>
<?}?>
    <!--Пагинация писем-->
<?
    echo \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
    ]);
    ?>

</div>

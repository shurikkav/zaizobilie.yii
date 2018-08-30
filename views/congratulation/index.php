<?
use app\controllers\AppController;
?>

<div class="congratulation_list" style=" ">

    <div class="congratulation_header">
        <div id="ulrubrics" class="congratulation_rubrics">
            <h3>Поздравления</h3>
        </div>
    </div>
<br>

<?
//var_dump($data);
foreach ($data as $row) {?>
    <!-- Письмо 1-->
    <div class="public_item ads wrap_left wrap_right wrap_main">
        <article>

            <div class="congratulation_content">
                <a href="<?= Yii::$app->urlManager->createUrl(['congratulation/view', 'id' => $row->id]) ?>">
                    <h2><?=$row->name;?></h2>
                    <p><time itemprop="datePublished" datetime="<?=$row->date_start;?>"><?=str_replace("-",".",substr($row->date_start,0,10));?></time></p>
                    <span class="intro"><?=$row->intro;?></span>
                </a>
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

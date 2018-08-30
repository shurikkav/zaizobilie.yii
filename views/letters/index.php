<?
use app\controllers\AppController;
?>

<div class="letters_list" style=" ">

    <div class="letters_header">
        <div id="ulrubrics" class="letters_rubrics">
            <h3>Письма читателей</h3>
        </div>
    </div>
<br>

<?
//var_dump($data);
foreach ($data as $row) {?>
    <!-- Письмо 1-->
    <div class="public_item ads wrap_left wrap_right wrap_main">
        <article>

            <div class="letters_content">
                <a href="<?= Yii::$app->urlManager->createUrl(['letters/view', 'id' => $row->id]) ?>">

                    <h2><?=$row->name;?></h2>
                    <p><time itemprop="datePublished" datetime="<?=$row->date_start;?>"><?=str_replace("-",".",substr($row->date_start,0,10));?></time></p>
                    <span class="intro"><?=$row->intro;?></span>

                </a>

                <footer>
                    <!--Статистика-->
                    <div class="stat">

                        <!--Просмотры-->
                        <div class="view">
                            <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                            <div class="content wrap_right"><?=intval($row->view);?></div>
                        </div>
                        <!--Просмотры-->

                    </div>
                    <!--Статистика-->
                </footer>
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

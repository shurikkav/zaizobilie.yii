<?
use app\controllers\AppController;



?>

<div class="article_list" style=" ">

    <div class="article_header">
        <!--Название рубрики-->
        <div id="ulrubrics" class="article_rubrics">
            <h3>Статьи</h3>
        </div>
        <!--Название рубрики-->
    </div>



<? foreach ($data as $row) {?>
    <!--Новость 1-->
    <div class="article_list_item">
        <article>

            <div class="news_content">
                <a href="<?= Yii::$app->urlManager->createUrl(['articles/view/', 'id' => $row->id]) ?>">

                    <!--Header published-->
                    <h2><?=$row->name;?></h2>
                    <!--Header published-->

                    <!--Date published-->
                    <p><time itemprop="datePublished" datetime="<?=$row->date_start;?>"><?=str_replace("-",".",substr($row->date_start,0,10));?></time></p>
                    <!--Date published-->

                    <!--Intro published -->
                    <span class="intro"><?=$row->intro;?>
                    </span>
                    <!--Intro published -->

                </a>

                <footer>
                    <!--Статистика-->
                    <div class="stat">

                        <!--Просмотры-->
                        <div class="view">
                            <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                            <div class="content wrap_right"><?=$row->view;?></div>
                        </div>
                        <!--Просмотры-->

                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                                <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                <div class="content wrap_right"><?=AppController::getCommentsCount($row->id);?></div>
                            </a> </div>
                        <!--Комментарии-->

                    </div>
                    <!--Статистика-->
                </footer>

            </div>

        </article>

    </div>
    <!--Новость 1-->
<?}?>
    <!--Пагинация новостей-->
<?
    echo \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
    ]);
    ?>
    <!--Пагинация новостей-->
</div>
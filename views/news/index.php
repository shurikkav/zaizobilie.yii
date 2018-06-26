<?
use app\controllers\AppController;
//var_dump($data);
$url="/?=news/view";
?>

<div class="article_list" style=" ">

    <div class="article_header">
        <!--Название рубрики-->
        <div id="ulrubrics" class="article_rubrics">
            <h3>Новости</h3>
        </div>
        <!--Название рубрики-->
    </div>



<? foreach ($data as $row) {?>
    <!--Новость 1-->
    <div class="article_list_item">
        <article>

            <div class="news_content">
                <a href="<?=$url;?>&amp;id=<?=$row[id];?>">

                    <!--Header published-->
                    <h2><?$row[name];?></h2>
                    <!--Header published-->

                    <!--Date published-->
                    <p><time itemprop="datePublished" datetime="<?=$row[date_start];?>"><?=$row[date_start];?></time></p>
                    <!--Date published-->

                    <!--Intro published -->
                    <span class="intro">
                        <?=$row[intro];?>
                    </span>
                    <!--Intro published -->

                </a>

                <footer>
                    <!--Статистика-->
                    <div class="stat">

                        <!--Просмотры-->
                        <div class="view">
                            <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                            <div class="content wrap_right"><?=$row[view];?></div>
                        </div>
                        <!--Просмотры-->

                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                                <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                <div class="content wrap_right"><?=AppController::getCommentsCount($row[id]);?></div>
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
    <div class="article_list_pages">
        <div class="paginator">
            <span>1</span>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">2</a>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=3">3</a>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=4">4</a>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=5">5</a>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=6">...</a>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">23</a>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">...</a>
            <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">»»</a>
        </div>
    </div>
    <!--Пагинация новостей-->


</div>






</div>
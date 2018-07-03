<?php

/* @var $this yii\web\View */
//var_dump($siteparam);
$this->title = $siteparam[name];//'My Yii Application';

$siteparam[urlArticle]="/?module=articles&action=view&id=".$siteparam[id];
$siteparam[urlNumber]="/?module=articles&action=list&id=0";
$siteparam[pid]=\app\controllers\AppController::getCommentsCount($siteparam[id]);



?>
<article class="sys_top_main theme">

    <!--Header top-->
    <header><h1>Тема номера</h1>
        <div id="ulissues" class="article_issues">
            <a href="<?=$siteparam[urlNumber];?>">Читать номер</a>
        </div>

    </header>
    <!--Header top-->


    <div class="top_main">
        <!--Тема 01-->
        <article>

            <a href="<?=$siteparam[urlArticle];?>">
                <!--Image published -->
                <div class="item_image">
                    <span class="image" style="background-image:url('<?=$siteparam[img2];?>');"><img src="/img/empty.png"></span>
                </div>
            </a>
            <!--Image published -->

            <div class="article_content">
                <a href="<?=$siteparam[urlArticle];?>">
                    <!--Header published-->
                    <h2><?=$siteparam[name];?></h2>
                    <!--Header published-->

                    <!--Date published-->
                    <p><time itemprop="datePublished" datetime="<?=$siteparam[date_start];?>"><?=$siteparam[date_start];?></time></p>
                    <!--Date published-->

                    <!--Intro published -->
                    <span class="intro"><?=$siteparam[intro];?></span>
                    <!--Intro published -->
                </a>

                <footer>
                    <!--Статистика-->
                    <div class="stat">

                        <!--Просмотры-->
                        <div class="view">
                            <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                            <div class="content wrap_right"><?=$siteparam[view];?></div>
                        </div>
                        <!--Просмотры-->

                        <!--Комментарии-->
                        <div class="comment">
                            <a itemprop="<?=$siteparam[urlArticle];?>" href="<?=$siteparam[urlArticle];?>">
                                <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                <div class="content wrap_right"><?=$siteparam[pid];?></div>
                            </a>
                        </div>
                        <!--Комментарии-->

                    </div>
                    <!--Статистика-->
                </footer>
            </div>

        </article>
        <!--Тема 01-->
    </div>


</article>

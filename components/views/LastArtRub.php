<article class="aside_item wrap_bottom">

<?
foreach ($data as $row)
        {
?>

<a href="/news/view/<?=$row[id];?>">

      


<div class="top_main_middle">
  <article>
    <!--Image published -->
    <div class="item_image">
    <!--Header Рубрика-->
    <a href="<?= Yii::$app->urlManager->createUrl(['articles/rubrics/', 'id' => $row->id]) ?>">
    <header><h3><?= \app\controllers\AppController::getRubricsNameArticle($row->rubrics);?></h3></header>
    </a>
    <!--Header Рубрика-->
    <a href="index_article.html">
    <span class="image" style="background-image:url(/<?=$row[img1];?>);"><img src="/img/empty_sq.png"></span>
    </a>
    </div>
    <!--Image published -->
    <div class="article_content">
      <a href="<?= Yii::$app->urlManager->createUrl(['articles/view/', 'id' => $row->id]) ?>">
      <!--Header published-->
      <h2><?=$row[name];?></h2>
      <!--Header published-->
      <!--Date published-->
      <p><time itemprop="datePublished" datetime="<?=substr($row->date_start,0,10)?>"><?=substr($row->date_start,0,10)?></time></p>
      <!--/Date published-->
      <!--Intro published -->
      <span class="intro"><?=$row[intro];?></span>
      <!--/Intro published -->
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
<div class="comment">
  <a itemprop="discussionUrl" href="index_article.html">
    <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
    <div class="content wrap_right"><?= \app\controllers\AppController::getCommentsCount($row->id);?></div>
  </a>
</div>
<!--Комментарии-->
          </div>
          <!--Статистика-->
      </footer>
    </div>
  </article>
</div>        
        
        
<?      }
?>


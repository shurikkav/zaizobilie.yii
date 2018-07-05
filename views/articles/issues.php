<?
use app\controllers\AppController;
use yii\widgets\LinkPager;

?>

<div class="article_list" style=" ">

									
<!--Name-->
<div class="article_name">
    <h1>Архив номеров</h1>
</div>

<? foreach ($data as $row) {?>
<!--Номер 1-->
<div class="archive_list_item">
	<article> 
            <a href="<?= Yii::$app->urlManager->createUrl(['articles/issue/', 'id' => $row->id]) ?>"> 
            <!--Image published -->
            <?/*if(strlen($row->img)>0){*/?>    
                <div class="item_image">
                    <span class="image pdf" style="background-image:url(/<?/*=$row->img*/?>);"><img src="/img/empty.png"></span> 
                </div>
            <?/*}*/?>										
            <!--Image published -->
            </a> 
            <div class="article_content"> 
                <a href="<?= Yii::$app->urlManager->createUrl(['articles/issue/', 'id' => $row->id]) ?>"> 
                    <!--Header published-->
                    <h2><?=$row->name;?></h2>
                    <!--Header published--> 
                    <!--Date published-->
                    <p><time itemprop="datePublished" datetime="<?=substr($row->date,0,10);?>"><?=substr($row->date,0,10);?></time></p>
                    <?if(strlen($row->file)>0){?><p><a href="/<?=$row->file?>" target="_blank">Скачать номер</a></p><?}?>
                    <!--Date published--> 
                </a>
            </div>
        </article>
</div>
<!--Номер 1-->
<?}?>

<!--Пагинация номеров-->
<div class="article_list_pages">
	<div class="paginator"> 
<?
    echo LinkPager::widget([
    'pagination' => $pagesArticle,
    ]);
 ?>    
        </div>
</div>
<!--Пагинация номеров-->

</div>
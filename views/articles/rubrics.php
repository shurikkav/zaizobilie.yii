<?
use app\controllers\AppController;
use yii\widgets\LinkPager;

?>

<div class="article_list" style=" ">

    <div class="article_header">
        <!--Название рубрики-->
        <div id="ulrubrics" class="article_rubrics">
            <h3><?=AppController::getRubricsNameArticle($param['id']);?></h3>
        </div>
        <!--Название рубрики-->
    </div>



<? foreach ($data as $row) {?>
	<div class="article_list_item">
            <article> 
		<?if(strlen($row->img1)>0){?>
                <a href="<?= Yii::$app->urlManager->createUrl(['articles/view/', 'id' => $row->id]) ?>"> 
        	<!--Image published -->
		<div class="item_image"> <span class="image" style="background-image:url(/<?=$row->img1;?>);"><img src="/img/empty.png"></span> 
		</div>
		<!--Image published -->
		</a> 
                <?}?>
		<div class="article_content"> 
		<a href="<?= Yii::$app->urlManager->createUrl(['articles/view/', 'id' => $row->id]) ?>"> 
		<!--Header published-->
		<h2><?=$row->name;?></h2>
		<!--Header published--> 
		<!--Date published-->
                <p><time itemprop="datePublished" datetime="<?=substr($row->date_start,0,10);?>"><?=substr($row->date_start,0,10);?></time></p>
		<!--Date published--> 
											
		<!--Intro published --> 
		<span class="intro">
		<?=$row->intro;?>
		</span> 
		<!--Intro published --> 
		</a>
            <footer> 
		<div class="stat"> 
		<!--Просмотры-->
                    <div class="view">
			<div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
			<div class="content wrap_right"><?=$row->view;?></div>
                    </div>
		<!--Просмотры--> 
		<!--Комментарии-->
                    <div class="comment"> 
                        <a itemprop="discussionUrl" href="?comments=1">
			<div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                        <div class="content wrap_right"><?=AppController::getCommentsCount($row->id);?></div>
                        </a> 
                    </div>
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
    echo LinkPager::widget([
    'pagination' => $pagesArticle,
    ]);
    ?>
    <!--Пагинация новостей-->
</div>
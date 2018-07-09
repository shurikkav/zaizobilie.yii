<?
        foreach ($data as $row)
        {
?>
<article>
	<div class="article_content">
        <a href="<?= Yii::$app->urlManager->createUrl(['articles/view/', 'id' => $row->id]) ?>">
            <h2><?=$row->name ?></h2>
	</a>
	<footer>
	<!--Статистика-->
	<div class="stat">
    	<!--Просмотры-->
            <div class="view">
                <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                <div class="content wrap_right"><?=$row->view;?></div>
            </div>
        </div>
	<!--Статистика-->
	</footer>
	</div>
</article>
<?
        }
?>

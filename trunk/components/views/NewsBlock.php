<article class="aside_item wrap_bottom">

    <header class="header_item">
        <h4>Новости</h4><a href="/?module=news&action=list&id=0" class="see_all">Все</a>
    </header>
    <ul>
<?
        foreach ($data as $row)
        {
?>
        <div class="public_item">
            <article>
                <a href="/?module=news&amp;action=list&amp;id=<?=$row[id];?>">
                    <!--Image published-->
                    <div class="item_image">
                        <span class="image" style="background-image:url(<?=$row[img1];?>);"></span>
                    </div>
                    <p><time itemprop="datePublished" datetime="<?=substr($row[date_start],0,10);?>"><?=str_replace("-",".",substr($row[date_start],0,10));?></time></p>
                    <h2><?=$row[name];?></h2>
                    <span class="intro" style="display:;"><?=$row[intro];?></span>
                </a>
                <footer style="display:;">
                    <a itemprop="discussionUrl" href="/?comments=1">Посмотреть комментарии...</a>
                </footer>
            </article>
        </div>
<?      }
?>

    </ul>
</article>
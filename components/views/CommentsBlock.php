<article class="aside_item wrap_bottom">

    <header class="header_item">
        <h4>Комментарии</h4><a href="index_comments_list.html" class="see_all">Все</a>
    </header>

    <!--Анонс комментарий 01-->
<?
        foreach ($data as $row)
        {
?>
            <div class="public_item">
                <article>
                    <!--Avatar published-->
                    <a href="/?module=news&amp;action=list&amp;id=<?=$row[id];?>">
                        <span class="id_user_avatar" style="background-image:url(<?=$row[img1];?>);"></span></a>
                    <!--Name published-->
                    <a href="/?module=news&amp;action=list&amp;id=<?=$row[id];?>">
                        <p><span class="id_user"><?=$row[username];?></span></p> </a>
                    <!--Date published-->
                    <p><time itemprop="datePublished" datetime="<?=str_replace("-",".",substr($row[date_start],0,10));?>"><?=str_replace("-",".",substr($row[date_start],0,10));?></time></p>
                    <footer style="display:block;">
                        <a itemprop="discussionUrl" href="?comments=1"><?=$row[intro];?></a>
                    </footer>
                </article>
            </div>

<?      }
?>


</article>
<article class="aside_item wrap_bottom">

    <header class="header_item">
        <h4>Поздравления</h4><a href="/congratulation/" class="see_all">Все</a>
    </header>
    <ul>
<?
        foreach ($data as $row)
        {
?>
        <div class="public_item">
            <article>
                <a href="/letters/<?=$row[id];?>">
                    <!--Image published-->
                    <div class="item_image">
                        <span class="image" style="background-image:url(<?=$row[img1];?>);"></span>
                    </div>
                    <p><time itemprop="datePublished" datetime="<?=$row[date_start];?>"><?=$row[date_start];?></time></p>
                    <h2><?=$row[name];?></h2>
                    <span class="intro"><?=$row[intro];?></span>
                </a>
            </article>
        </div>
<?      }
?>

    </ul>
</article>
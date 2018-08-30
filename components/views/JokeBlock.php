<article class="aside_item wrap_bottom">

    <header class="header_item">
        <h4>Анекдоты</h4><a href="/joke/" class="see_all">Все</a>
    </header>
    <ul>
<?
        foreach ($data as $row)
        {
?>
        <div class="public_item">
            <article>
                    <h2><?=$row[name];?></h2>
                    <span class="intro"><?=$row[text];?></span>
            </article>
        </div>
<?      }
?>

    </ul>
</article>
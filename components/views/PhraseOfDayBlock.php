
<!-- Фраза дня -->
<div class="top_main_middle top_articles" id="PhraseOfDay">

    <header><h3>Фраза дня</h3></header>

    <ul class="jcarousel-skin-tango" data-visible="1">
        <?
        foreach ($data as $row)
        {
        ?>

        <li><span class="h_2 name"><h2><?=$row[text];?></h2></span></li>
        <?
        }
        ?>

    </ul>

</div>
<!-- Фраза дня -->




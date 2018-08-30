<div class="top_main_middle top_articles" id="one-string">

    <!--Header Топ статей-->
    <header><h3>Одной строкой</h3></header>
    <!--Header Топ статей-->

    <div class=" jcarousel-skin-tango">
        <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                <ul class="jcarousel-list jcarousel-list-horizontal" data-visible="1" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 4240px;">
        <?
        foreach ($data as $row)
        {
        ?>
        <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2><?=$row[text];?></h2></span></li>
        <?
        }
        ?>

                </ul>
            </div>
            <div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" style="display: block;" disabled="disabled"></div>
            <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>
        </div>
    </div>
</div>
<!--Одной строкой-->













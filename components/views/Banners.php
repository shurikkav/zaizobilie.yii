<div class="banner_placement top">
<?
//var_dump($Banners);
?>
    <? foreach ($Banners as $banner){
        ?>
        <div id="banner_<?=$banner["zone_id"];?>">

            <? if($banner["code"] != ''){ ?>
                <?=$banner["code"];?>
            <? } else { ?>
                <img  alt="Рекламный баннер Zona <?=$banner["zone_id"];?>"> <span>Рекламный баннер <?=$banner["id"];?></span>
            <?}?>

        </div>
    <? }
    ?>

</div>




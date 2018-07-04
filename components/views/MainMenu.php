<ul class="main-menu">
    <? foreach ($menuItems as $menuItem){ ?>
        <li>
            <? if($menuItem[link] == ''){ ?>
                <a href="/page/<?=$menuItem[id];?>"><?=$menuItem[name];?></a>
            <? } else { ?>
                <a href ='<?=$menuItem[link];?>' > <?=$menuItem[name];?></a>
            <?}?>

        </li>
    <? } ?>

   <li class="send_mail"><a href="mailto:za.izobilie@yandex.ru" title="Написать письмо" target="_blank"></a></li>
   </ul>




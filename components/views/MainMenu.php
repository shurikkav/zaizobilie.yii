<ul class="main-menu">
    <? foreach ($menuItems as $menuItem){ ?>
        <li>
            <? if($menuItem[plugin] == ''){ ?>
                <a href="/pages/<?=$menuItem[id];?>"><?=$menuItem[name];?></a>
            <? } else { ?>
                <a href ='<?=$menuItem[plugin];?>' > <?=$menuItem[name];?></a>
            <?}?>

        </li>
    <? } ?>

   <li class="send_mail"><a href="mailto:za.izobilie@yandex.ru" title="Написать письмо" target="_blank"></a></li>
   </ul>




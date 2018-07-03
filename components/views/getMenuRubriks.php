<? if (count($data)>0&&!empty($data)){
    ?>
<div class="menu_left wrap_bottom">
    <ul>
<?      foreach ($data as $row){?>
            <li><a href="<?= Yii::$app->urlManager->createUrl(['articles/rubrics/', 'id' => $row[id]]) ?>" class="link_name">
               <span class="h_2 name"><?=$row[name];?></span></a></li>
<?      }?>
    </ul>

    <p class="more" style="display: none;"><a href="#" class="">Развернуть список</a></p>
    <p class="more" style="display: block;"><a href="#" class="">Свернуть список</a></p>
</div>
<?
}
?>
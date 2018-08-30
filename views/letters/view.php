<?
use \app\controllers\AppController;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
?>
<div class="letters_details" style="">


    <div class="letters_header">
        <div id="ulrubrics" class="letters_rubrics">
            <a href="<?= Yii::$app->urlManager->createUrl(['letters/']) ?>"><h3>Письма наших читателей.</h3></a>
        </div>
    </div>





    <!--Name-->
    <div class="letters_name">
        <h1><?=$data->name;?></h1>
    </div>
    <!--Name-->

    <!--Дата публикации-->
    <div class="letters_date">
        <time itemprop="datePublished" datetime="<?=$data->date_start;?>"><?=$data->date_start;?></time>
    </div>
    <!--Дата публикации-->


    <!--Статистика-->
    <div class="stat">
        <!--Просмотры-->
        <div class="view">
            <div class="icon"><img src="/img/Icon_view.svg" alt="Просмотров:"></div>
            <div class="content wrap_right"><?=intval($data->view)+1;?></div>
        </div>
        <!--Просмотры-->
    </div>
    <!--Статистика-->


    <div class="letters_text"><?=$data->text;?>
    </div>

    <!--Поделиться в соцсетях-->
    <div class="atricle_share">
        <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="https://yastatic.net/share2/share.js"></script>
        <div class="ya-share2 ya-share2_inited" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""><div class="ya-share2__container ya-share2__container_size_m"><ul class="ya-share2__list ya-share2__list_direction_horizontal"><li class="ya-share2__item ya-share2__item_service_vkontakte"><a class="ya-share2__link" href="https://vk.com/share.php?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Dletterss%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="ВКонтакте"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">ВКонтакте</span></a></li><li class="ya-share2__item ya-share2__item_service_facebook"><a class="ya-share2__link" href="https://www.facebook.com/sharer.php?src=sp&amp;u=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Dletterss%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Facebook"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter"></span></span><span class="ya-share2__title">Facebook</span></a></li><li class="ya-share2__item ya-share2__item_service_odnoklassniki"><a class="ya-share2__link" href="https://connect.ok.ru/offer?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Dletterss%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Одноклассники"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Одноклассники</span></a></li><li class="ya-share2__item ya-share2__item_service_moimir"><a class="ya-share2__link" href="https://connect.mail.ru/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Dletterss%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Мой Мир"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter"></span></span><span class="ya-share2__title">Мой Мир</span></a></li><li class="ya-share2__item ya-share2__item_service_gplus"><a class="ya-share2__link" href="https://plus.google.com/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Dletterss%26action%3Dview%26id%3D97&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Google+"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Google+</span></a></li></ul><iframe class="ya-share2__iframe" src="https://yastatic.net/share2/frame.html?namespace=ya-share2.0.10154548648398576" style="border: 0; display: none; position: absolute; left: -9999px;"></iframe></div></div>

        <div id="print" class="atricle_print" style="cursor:pointer;"><img src="/img/print.png" alt="Распечатать" width="25" height="25"></div>
    </div>
    <!--Поделиться в соцсетях-->


</div>
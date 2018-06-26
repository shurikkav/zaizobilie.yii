<div class="article_details" style=" ">


    <div class="article_header">
        <!--Название рубрики-->
        <div id="ulrubrics" class="article_rubrics">
            <a href="<?=$data[rubrikurl];?>"><h3><?=$data[rubrics];?></h3></a>
        </div>
        <!--Название рубрики-->


        <!--Номер выпуска-->
        <div id="ulissues" class="article_issues">
            <a href="<?=$data[issuesurl];?>"><span class="clear">Выпуск</span> <?=$data[issues];?></a>
        </div>
        <!--Номер выпуска-->
    </div>





    <!--Name-->
    <div class="article_name">
        <h1><?=$data[name];?></h1>
    </div>
    <!--Name-->


    <!--Subname-->
    <div class="article_subname"><?=$data[subname];?></div>
    <!--Subname-->


    <!--Дата публикации-->
    <div class="article_date">
        <time itemprop="datePublished" datetime="<?=$data[date_start];?>"><?=$data[date_start];?></time>
    </div>
    <!--Дата публикации-->


    <!--Статистика-->
    <div class="stat">
        <!--Просмотры-->
        <div class="view">
            <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
            <div class="content wrap_right"><?=$data[view];?></div>
        </div>
        <!--Просмотры-->

        <!--Комментарии-->
        <div class="comment">
            <a itemprop="discussionUrl" href="?comments=1">
                <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                <div class="content wrap_right"><?
                    use app\controllers\AppController;
                    echo AppController::getCommentsCount($data[id]);
                    ?></div>
            </a>
        </div>
        <!--Комментарии-->

    </div>
    <!--Статистика-->



    <?if(!empty($data[img3])){?>
        <!--Image-->
        <div class="atricle_img">
            <img src="<?=$data[img3];?>" alt="<?=$data[name]?>" class="img3" style="">
        </div>
        <!--Image-->
    <?}?>

    <div class="article_intro"><?=$data[intro];?></div>

    <div class="article_text">
        <?=$data[text];?>
        <p><a href="<?=$data[url];?>"><?=$data[url];?></a></p>
    </div>

    <div class="article_author"><?=$data[author];?></div>


    <!--Поделиться в соцсетях-->
    <div class="atricle_share">
        <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="https://yastatic.net/share2/share.js"></script>
        <div class="ya-share2 ya-share2_inited" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""><div class="ya-share2__container ya-share2__container_size_m"><ul class="ya-share2__list ya-share2__list_direction_horizontal"><li class="ya-share2__item ya-share2__item_service_vkontakte"><a class="ya-share2__link" href="https://vk.com/share.php?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_article.html&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="ВКонтакте"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">ВКонтакте</span></a></li><li class="ya-share2__item ya-share2__item_service_facebook"><a class="ya-share2__link" href="https://www.facebook.com/sharer.php?src=sp&amp;u=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_article.html&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Facebook"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter"></span></span><span class="ya-share2__title">Facebook</span></a></li><li class="ya-share2__item ya-share2__item_service_odnoklassniki"><a class="ya-share2__link" href="https://connect.ok.ru/offer?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_article.html&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Одноклассники"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Одноклассники</span></a></li><li class="ya-share2__item ya-share2__item_service_moimir"><a class="ya-share2__link" href="https://connect.mail.ru/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_article.html&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Мой Мир"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter"></span></span><span class="ya-share2__title">Мой Мир</span></a></li><li class="ya-share2__item ya-share2__item_service_gplus"><a class="ya-share2__link" href="https://plus.google.com/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_article.html&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Google+"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Google+</span></a></li></ul><iframe class="ya-share2__iframe" src="https://yastatic.net/share2/frame.html?namespace=ya-share2.0.1513026604745984" style="border: 0; display: none; position: absolute; left: -9999px;"></iframe></div></div>

        <div id="print" class="atricle_print" style="cursor:pointer;"><img src="/img/print.png" alt="Распечатать" width="25" height="25"></div>
    </div>
    <!--Поделиться в соцсетях-->



    <!--Комментарии к статье-->
    <footer>
        <div class="article_comments">

            <div id="commentsform" class="article_commentsform"> <a name="cp"></a>
                <h3>Комментарии</h3>
                <a name="cf"></a>
                <div id="commtext">

                    <!--Comment 01-->
                    <div class="public_item">

                        <article>

                            <!--Autor-->
                            <div id="authorlist">
                                <!--Avatar published-->
                                <a href="?module=comments&amp;action=list&amp;id_user=44">
                                    <span class="id_user_avatar" style="background-image:url(media/admin/image_user_avatar_01.jpg);"></span></a>

                                <!--Name published-->
                                <a href="?module=comments&amp;action=list&amp;id_user=44">
                                    <p><span class="id_user">Константин Констанинович Константиновский</span></p> </a>

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                            </div>
                            <!--Autor-->

                            <!--Text-->
                            <div id="textlist">
                                <p>Якутское УФАС России привлекло к ответственности владельца интернет издания «Светский Якутск» к административной ответственности за распространение на сайте издания рекламы алкогольной продукции.</p>
                            </div>
                            <!--Text-->

                            <!--Feedback-->
                            <footer style="display:block;">
                                <div id="otvet">
                                    <a href="#cf" onclick="$(&quot;#contid&quot;).val(&quot;597&quot;);">Ответить</a>
                                </div>
                            </footer>
                            <!--Feedback-->

                        </article>

                    </div>
                    <!--Comment 01-->

                    <!--Comment 02-->
                    <div class="public_item">

                        <article>

                            <!--Autor-->
                            <div id="authorlist">
                                <!--Avatar published-->
                                <a href="?module=comments&amp;action=list&amp;id_user=44">
                                    <span class="id_user_avatar" style="background-image:url(media/admin/image_user_avatar_01.jpg);display: none;"></span></a>

                                <!--Name published-->
                                <a href="?module=comments&amp;action=list&amp;id_user=44">
                                    <p><span class="id_user">Константин Констанинович Константиновский</span></p> </a>

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                            </div>
                            <!--Autor-->

                            <!--Text-->
                            <div id="textlist">
                                <p>Якутское УФАС России привлекло к ответственности владельца интернет издания «Светский Якутск» к административной ответственности за распространение на сайте издания рекламы алкогольной продукции.</p>
                            </div>
                            <!--Text-->

                            <!--Feedback-->
                            <footer style="display:block;">
                                <div id="otvet">
                                    <a href="#cf" onclick="$(&quot;#contid&quot;).val(&quot;597&quot;);">Ответить</a>
                                </div>
                            </footer>
                            <!--Feedback-->

                        </article>

                    </div>
                    <!--Comment 02-->


                </div>

                <h3>Оставить сообщение:</h3>

                <form id="commform">
                    <input type="hidden" name="namemod" id="namemodcomm" value="comm">
                    <input type="hidden" name="contid" id="contid" value="97">


                    <!--Авторизацованный пользователь-->
                    <div id="authuser">

                        <!--Name-->
                        <div id="namecdiv" class="form_item">
                            <span class="warning_item" style=""></span>
                            <input type="text" name="name" id="commname" placeholder="Имя" value="" maxlength="30">
                        </div>
                        <!--Name-->

                        <!--E-mail-->
                        <div id="emailcdiv" class="form_item">
                            <span class="warning_item" style="">Некорректный E-mail</span>
                            <input type="text" name="email" id="commemail" placeholder="E-mail" value="" maxlength="30">
                        </div>
                        <!--E-mail-->

                    </div>
                    <!--Авторизацованный пользователь-->


                    <!--Text-->
                    <div id="commmessagediv" class="form_item">
                        <textarea name="message" rows="10" cols="50" placeholder="Напишите ваши мысли о публикации" id="commmessage"></textarea>
                    </div>
                    <!--Text-->

                    <!--reCCAPTCHA-->
                    <div id="commcaptchadiv" class="form_item">
                        <div id="g-recaptcha" data-onloadcallbackname="onloadCallback" data-verifycallbackname="verifyCallback">
                            <img src="templates/super-mega-template/img/captcha.jpg" height="60px">
                            <!--<div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfNXxgUAAAAACw097yvsEVrNnZ9_D8GLn0fXB4J&amp;co=aHR0cHM6Ly93d3cubm92YXlhZ2F6ZXRhLnJ1OjQ0Mw..&amp;hl=ru&amp;type=image&amp;v=r20171031153338&amp;theme=light&amp;size=normal&amp;cb=ge36y1lwlba1" width="50%" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 125px; height: 20px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div>-->
                        </div>
                    </div>
                    <!--reCCAPTCHA-->


                    <!--Enter - Reset-->
                    <div class="form_item">
                        <input type="submit" class="button" value="Отправить">
                        <input type="reset" class="button" value="Очистить">
                    </div>
                    <!--Enter - Reset-->

                </form>
            </div>


        </div>
    </footer>
    <!--Комментарии к статье-->


</div>
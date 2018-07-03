<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\controllers\AppController;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js" lang="<?= Yii::$app->language ?>">


<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="ru" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="alternate" type="application/rss+xml" href="/rss.php" title="RSS Новости"/>

    <!--stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/font_new.css">
    <link rel="stylesheet" type="text/css" href="/css/main_new.css" />

    <!--Стили закладок для новостей от Инфорос-->
    <link rel="stylesheet" type="text/css" href="/css/tab_new.css" />
    <!--Стили закладок для новостей от Инфорос-->

    <!--Стили рекламных баннеров-->
    <link rel="stylesheet" type="text/css" href="/css/adds_banners.css" />
    <!--Стили рекламных баннеров-->

    <!--Стили popup окон-->
    <link rel="stylesheet" type="text/css" href="/css/pop_up.css" />
    <!--Стили popup окон-->

    <!--Стили формы поиска в каталоге предприятий-->
    <link rel="stylesheet" type="text/css" href="/css/helpers.css" />
    <!--Стили формы поиска в каталоге предприятий-->

    <!--Стили для печати-->
    <link rel="stylesheet" type="text/css" href="/css/print.css" />
    <!--Стили для печати-->

    <link rel="stylesheet" type="text/css" href="/css/wrap_new.css" />
    <link rel="stylesheet" type="text/css" href="/css/layout_new.css" />
    <link rel="stylesheet" type="text/css" href="/css/smoothness/jquery-ui-1.9.0.custom.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/datepicker_new.css" />
    <link rel="stylesheet" type="text/css" href="/css/chosen.css" />
    <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">

    <!--Стили для карусели-->
    <link rel="stylesheet" type="text/css" href="/css/jcarousel.css">
    <link rel="stylesheet" type="text/css" href="/css/jcarousel_top.css">
    <!--Стили для карусели-->

    <!--Java scripts -->
    <script src="/js/vendor/jquery-1.8.0.min.js"></script>
	<script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/vendor/jquery.placeholder.js"></script>
    <script src="/js/vendor/jquery.collapsorz.js"></script>
    <script src="/js/vendor/jquery.jcarousel.min.js"></script>
    <script src="/js/vendor/jquery-ui-1.9.0.custom.min.js"></script>
    <script src="/js/jquery.collapsorz_1.1.min.js"></script>
    <script src="/js/vendor/chosen.jquery.min.js"></script>
    <script src="/js/jsibox_basic.js"></script>
    
	<script src="/js/plugins.js"></script>
    <script src="/js/selectbox.js"></script>
    <script src="/js/jquery.anythingslider.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/vendor/modernizr-2.6.1.min.js"></script>
    <!--<script src="/web/js/main.js"></script>-->

    <!--Скрипт закладок для новостей от Инфорос-->
    <script src="/js/tab_function.js"></script>
    <!--Скрипт закладок для новостей от Инфорос-->

    <!--Поиск в каталоге предприятий-->
    <script src="/js/jquery.combobox.js"></script>
    <script src="/js/jquery.rating.js" charset="UTF-8"></script>
    <!--Поиск в каталоге предприятий-->

    <!--Скрипт кнопки Наверх-->
    <script src="/js/to_top.js"></script>
    <!--Скрипт кнопки Наверх--->
</head>

<body>
<?php $this->beginBody() ?>
<div class="popup_modal animated" style="display: none;">

    <!--Background-->
    <div class="popup_modal_overlay"></div>
    <!--Background-->

    <div class="popup_modal_container">

        <div class="popup_modal_content">

            <div class="auth_container">

                <!--Кнопка закрыть-->
                <div class="popup_close"><a href="javascript:void(0);" title="Закрыть" class="close"></a></div>
                <!--Кнопка закрыть-->



                <!--No Cookie, no JavaScript-->

                <!--Если отключены Cookie-->
                <script>
                    if (!slon.common.acceptCookie()) {
                        $(".no_cookie").removeClass("hide");
                    }
                </script>
                <div class="alrt hide no_cookie">
                    <p>В вашем браузере отключена функция <strong>Cookies</strong>, поэтому авторизация невозможна.<br>Как включить эту функцию в вашем браузере, можно посмотреть <a href="http://www.setcookie.ru/" target="_blank">здесь</a>.</p>
                </div>
                <!--Если отключены Cookie-->

                <!--Если отключен JavaScript-->
                <noscript>
                    <div class="alrt">
                        <p>У вас отключена функция <strong>JavaScript</strong>. При авторизации или регистрации в этом нет необходимости, однако мы не сможем проверить, включены ли у вас <strong>Cookies</strong>, а без этого авторизация невозможна.<br>Поскольку <strong>JavaScript</strong> просто так не выключают, мы полагаем, что вы знаете, что делаете.<br>
                            Если же это произошло случайно, то можно <a href="http://enable-javascript.com/ru/" target="_blank">здесь</a> прочитать инструкцию для вашего браузера и исправить эту проблему.</p>
                    </div>
                </noscript>
                <!--Если отключен JavaScript-->

                <!--No Cookie, no JavaScript-->


                <div class="auth_table">


                    <!--Левая колонка-->
                    <div class="auth_left">

                        <div class="item_left">

                            <!--Header-->
                            <div class="auth_header">
                                <h3 class="auth_title">Войти</h3>
                            </div>
                            <!--Header-->

                            <div class="auth_block">
                                <p class="wrap_bottom">Для зарегистрированных читателей:</p>

                                <div class="form_group" style="padding-right:40px;">
                                    <!--Форма заполнения-->
                                    <form action="/signin-check" method="post">

                                        <!--E-mail-->
                                        <div class="form_item">
                                            <span class="warning_item" style="">Неверный E-mail или логин</span>
                                            <input class="form_control" type="text" name="username" placeholder="E-mail или логин" required value="">
                                        </div>
                                        <!--E-mail-->

                                        <!--Password-->
                                        <div class="form_item">
                                            <span class="warning_item" style="">Неверный пароль</span>
                                            <!--Показать-скрыть пароль-->
                                            <label class="show_password" for="show_password">
                                                <input type="checkbox" id="show_password" class="">
                                                <!--
                                                <input type="checkbox" id="show_password" class="active">
                                                -->
                                                <span></span>
                                            </label>
                                            <!--Показать-скрыть пароль-->

                                            <input class="form_control" id="password" type="password" name="password" placeholder="Пароль" spellcheck="false" maxlength="20" required>
                                            <!--
                                            <input class="form_control" id="password" type="text" name="password" placeholder="Пароль" spellcheck="false" maxlength="20" required>
                                            -->
                                        </div>
                                        <!--Password-->




                                        <!--reCCAPTCHA-->
                                        <div class="form_item">
                                            <div id="g-recaptcha" data-onloadcallbackname="onloadCallback" data-verifycallbackname="verifyCallback">
                                                <img src="/img/captcha.jpg" height="60px">
                                                <!--<div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfNXxgUAAAAACw097yvsEVrNnZ9_D8GLn0fXB4J&amp;co=aHR0cHM6Ly93d3cubm92YXlhZ2F6ZXRhLnJ1OjQ0Mw..&amp;hl=ru&amp;type=image&amp;v=r20171031153338&amp;theme=light&amp;size=normal&amp;cb=ge36y1lwlba1" width="50%" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 125px; height: 20px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div>-->
                                            </div>
                                        </div>
                                        <!--reCCAPTCHA-->





                                        <!--Enter-->
                                        <button type="submit" class="btn_enter">Войти</button>
                                        <!--Enter-->

                                        <!--Восстановление пароля-->
                                        <div class="auth_footer_right"><a href="/reset-password">Забыли пароль?</a></div>
                                        <!--Восстановление пароля-->

                                    </form>
                                    <!--Форма заполнения-->
                                </div>

                            </div>

                        </div>

                    </div>
                    <!--Левая колонка-->


                    <!--Правая колонка-->
                    <div class="auth_right">

                        <div class="item_right">

                            <!--Header-->
                            <div class="auth_header">
                                <h3 class="auth_title">Авторизоваться</h3>
                            </div>
                            <!--Header-->

                            <div class="social_block">
                                <p class="wrap_bottom">Войти через аккаунт в одной из соцсетей:</p>

                                <!--Кнопки-->
                                <a href="../signin/auth/request/facebook" class="social_btn social_btn_fb" title="Facebook">
                                    <span>Facebook</span><i class="icon icon_facebook"></i>
                                </a>

                                <a href="../signin/auth/request/vkontakte" class="social_btn social_btn_vk" title="Вконтакте">
                                    <span>Вконтакте</span><i class="icon icon_vk"></i>
                                </a>

                                <a href="../signin/auth/request/odnoklass" class="social_btn social_btn_odnoklass" title="Одноклассники">
                                    <span>Одноклассники</span><i class="icon icon_odnoklass"></i>
                                </a>
                                <!--Кнопки-->

                            </div>

                            <!--Footer-->
                            <div class="auth_footer_left">
                                <a href="/signup" class="jsEnterSite" data-sign="signup">Регистрация</a>
                            </div>
                            <!--Footer-->

                        </div>

                    </div>
                    <!--Правая колонка-->


                </div>





            </div>

        </div>

    </div>

</div>
<!--Authorisation Pop Up-->


<!--Layout 768px--><!--Меню-->
<div class="mobile" style="display: none;">
    <!--Background-->
    <div class="back_dark"></div>
    <!--Background-->




    <div class="header_mobile_menu_list wrap_left wrap_main">
        <div class="button_right"><a title="Закрыть меню" href="#"><img src="/img/Icon_arrow_right.svg" alt="Закрыть меню"></a></div>
        <ul>
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ]);
            NavBar::end();
            ?>
            <li class="send_mail"><a href="mailto:za.izobilie@yandex.ru" title="Написать письмо" target="_blank"></a></li>
        </ul>

        <!--Левое мобильное меню -->
        <!--Скрыть-показать рубрики-->
        <p class="more" style="display:block;"><a href="#" class="">Показать рубрики</a></p>
        <p class="more" style="display:none;"><a href="#" class="">Скрыть рубрики</a></p>
        <!--Скрыть-показать рубрики-->
        <ul style="display: none;">
            <li><a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0">Спорт</a></li>
            <li><a href="?module=articles&amp;action=list&amp;rubrics=11&amp;id=0">Общество</a></li>
            <li><a href="?module=articles&amp;action=list&amp;rubrics=19&amp;id=0">Образование</a></li>
            <li><a href="?module=articles&amp;action=list&amp;rubrics=21&amp;id=0">Экономика</a></li>
            <li><a href="?module=articles&amp;action=list&amp;rubrics=23&amp;id=0">Политика</a></li>
            <li><a href="?module=articles&amp;action=list&amp;rubrics=25&amp;id=0">Происшествия</a></li>
        </ul>

        <!--Левое мобильное меню -->
    </div>
</div>
<!--/Layout 768px--><!--/Меню-->

<!--Layout 320px--> <!--Поиск-->
<div class="mobile" style="display:none;">
    <!--Background-->
    <div class="back_dark"></div>
    <!--Background-->
    <div class="header_mobile_search">
        <div class="button_left"><a title="Закрыть поиск" href="#"><img src="/img/Icon_arrow_left.svg" alt="Закрыть поиск"></a></div>
        <!--Поиск-->
        <div class="search_mobile">
            <form action="" method="get">
                <input type="hidden" name="module" value="search">
                <input type="text" name="query" class="search_text" placeholder="поиск по сайту" />
                <input type="submit" value="" class="search_image" />
            </form>
        </div>
        <!--Поиск-->
    </div>
</div>
<!--Layout 320px-->
<!--Поиск-->

<!--Рекламное место 01 баннер 980x90-->
<div class="banner" style="display:none;">
    [BANNER_1]
</div>
<!--Рекламное место 01 баннер 980x90-->

<!--Header-->
<header>
    <!--Полоса авторизации, погоды, соцсетей, rss, почта-->
    <div class="top_header">
        <div class="rate_top">
            <!--Архив-->
            <div class="archive">
                <form id="myform" action="?module=number&action=list" method="post">
                    <div class="archive-head">Архив</div>
                    <select id="nom_year" class="combobox" style='margin-top:5px;'>
                        <option value=0></option>
                        {ARHIVE_YEARS}
                    </select>
                    <select style="margin-left:1px;" id="number" class="combobox">
                        <option value="0"></option>
                        {ARHIVE_NUMBERS}
                    </select>
                </form>

            </div>
            <!--Архив-->
            <!--Панель версии для слабовидящих-->
            <div class="feedback">
                <!--Кнопки версии-->
                <div class="social_represent">
                    <div class="visually_impaired_item">
                        <a href="#" target="_blank" title="Версия для слабовидящих" class="auth_represent_item">Версия для слабовидящих</a>
                    </div>
                    <div class="visually_impaired_item_mobile">
                        <a href="#" target="_blank" title="Версия для слабовидящих" class="social_btn_visually"><i class="icon icon_visually_impaired"></i></a>
                    </div>
                </div>
                <!--Кнопки версии-->
            </div>
            <!--Панель версии для слабовидящих-->

            <!--Панель авторизации и социальных сетей-->
            <div class="represent">


                <!--Пользователь-->
                <div class="auth_represent" style="display:none;">
                    <a href="/{USER}/" class="auth_represent_item user_name" data-sign="signin">
                        <i class="icon user_pic" style="background-image:url(/media/admin/image_user_avatar_01.jpg);"></i>{UserName}
                    </a>
                </div>
                <!--Пользователь-->


                <!--Авторизация-->
                <div class="auth_represent">
                    <a href="index_popup_01.html" class="auth_represent_item" data-sign="signin">Авторизация</a>
                </div>
                <!--Авторизация-->


                <!--Кнопки -->
                <div class="social_represent">

                    <!--RSS-->
                    <div class="feedback_item" style="display: none;">
                        <a href="rss.php" target="_blank" title="Новостная лента" class="feedback_btn_rss"><i class="icon icon_rss"></i></a>
                    </div>

                </div>
                <!--Кнопки -->


                <!--Социальные кнопки-->
                <div class="social_represent">
                    <!--Facebook-->
                    <div class="social_represent_item">
                        <a href="https://www.facebook.com/#" target="_blank" title="Мы в Facebook" class="social_btn_fb"><i class="icon icon_facebook"></i></a>
                    </div>

                    <!--VKontakte-->
                    <div class="social_represent_item">
                        <a href="https://vk.com/#" target="_blank" title="Мы в ВКонтакте" class="social_btn_vk"><i class="icon icon_vk"></i></a>
                    </div>

                    <!--Odnoklassniki-->
                    <div class="social_represent_item">
                        <a href="https://ok.ru/#" target="_blank" title="Мы в Одноклассниках" class="social_btn_odnoklass"><i class="icon icon_odnoklass"></i></a>
                    </div>

                </div>
                <!--Социальные кнопки-->


            </div>
            <!--Панель авторизации и социальных сетей-->

        </div>

    </div>
    <!--Полоса авторизации, погоды, соцсетей, rss, почта-->



    <!--Полоса логотип, герб-->
    <div class="header_content">

        <div class="header_content_over">

            <div class="header_content_main">

                <!--Герб-->
                <div class="logo_gerb"><img src="/img/gerb.svg" alt="Герб Колпнянского района"></div>
                <!--Герб-->


                <div class="logo_left">

                    <!--Логотип-->
                    <div class="logo">
                        <a href="/" title="На главную"><img src="/img/logo_01.svg" alt="За изобилие. Колпнянская районная общественно-политическая газета орловской области."></a>


                    </div>
                    <!--Логотип-->

                    <!--Описание 1-->
                    <div class="logo_discrp part1">
                        <span>КОЛПНЯНСКАЯ РАЙОННАЯ ОБЩЕСТВЕННО-ПОЛИТИЧЕСКАЯ</span><br>
                        <span>ГАЗЕТА ОРЛОВСКОЙ ОБЛАСТИ</span>
                    </div>
                    <!--Описание 1-->

                    <!--Описание 2-->
                    <div class="logo_discrp part2">
                        <span>ОСНОВАНА В ФЕВРАЛЕ 1932 ГОДА</span>
                    </div>
                    <!--Описание 2-->

                </div>



                <div class="logo_right">

                    <!--Возраст-->
                    <div class="logo_age">
                        <span>16+</span>
                    </div>
                    <!--Возраст-->

                    <!--Погода, Валюта-->
                    <div class="rate">
                        <div class="rate_back">
                        <?
                        use app\components\InformerValutWidget;
                        echo InformerValutWidget::widget();
                        ?>
                        </div>

                    </div>
                    <!--Погода, Валюта-->
                </div>




            </div>

        </div>

        <div class="header_content_bgrnd">
        </div>



    </div>
    <!--Полоса логотип, герб-->



    <!--Header Menu-->
    <menu class="header_menu">
        <div class="header_menu_content">

            <div class="header_menu_flex">

                <!--Мобильное Меню-->
                <div class="button_menu">
                    <a title="Открыть меню" href="#"><img src="/img/Icon_menu.svg" alt="Открыть меню"></a>
                </div>
                <!--Мобильное Меню-->


                <!--Мобильный Поиск-->
                <div class="button_search"><a title="Найти" href="#"><img src="/img/Icon_search.svg" alt="Найти"></a></div>
                <!--Мобильный Поиск-->



                <!--Меню-->
                <!--Layout 1024px-->
                <div class="header_menu_list">
                    <?php
                    use app\components\MainMenuWidget;
                    echo MainMenuWidget::widget();
                    ?>
                </div>
                <!--Layout 1024px-->
                <!--Меню-->




                <!--Поиск-->
                <div class="search wrap_main wrap_right">
                    <form action="" method="get">
                        <input type="hidden" name="module" value="search">
                        <input type="text" name="query" class="search_text" placeholder="поиск по сайту" />
                        <input type="submit" value="" class="search_image" />
                    </form>
                </div>
                <!--Поиск-->


            </div>

        </div>


    </menu>
    <!--Header Menu-->

</header>
<!--Header-->



<!--Main-->
<section>

    <!--Рекламное место 01 баннер 980x60-->
    <div class="banner" style="display:none;">
        [BANNER_1]
    </div>
    <!--Рекламное место 01 баннер 980x60-->










    <!-------------------------Мобильная версия статей на странице------------------------------->







    <!--Главная колонка для мобильной 768px-->
    <div class="main_mobile">

        <div class="main_collumn wrap_bottom">

            <!--Главная статья, колонка редактора-->
            <!--Тема номера-->
            <article class="sys_top_main theme">

                <!--Header top-->
                <header><h1>Тема номера</h1>
                    <div id="ulissues" class="article_issues">
                        <a href="index_article_list.html">Читать номер</span></a>
                    </div>

                </header>
                <!--Header top-->



                <div class="top_main">
                    <!--Тема 01-->
                    <article>

                        <a href="index_article.html">
                            <!--Image published -->
                            <div class="item_image">
                                <span class="image" style="background-image:url(/media/admin/image_user_pet_03.jpg);"><img src="/img/empty.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="index_article.html">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="index_article.html" href="index_article.html">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>
                    <!--Тема 01-->
                </div>


            </article>
            <!--Тема номера-->

            <div class="white_wrap"> &nbsp;</div>

            <!--Колонка редактора-->
            <article class="sys_top_main right_redactor">
                <div class="right_collumn">
                    <!--<div class="right_collumn">-->

                    <article class="aside_item">

                        <header class="header_item">
                            <h4>Колонка редактора</h4>
                        </header>


                        <!--Анонс редактора-->
                        <div class="public_item">


                            <article>

                                <a href="index_article_redactor.html">
                                    <!--Image published-->
                                    <div class="item_image">
                                        <span class="image" style="background-image:url(/media/10.jpg);"><img src="/img/empty.png"></span>
                                    </div>

                                    <!--Date published-->
                                    <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>


                                    <!--Header published-->
                                    <h2>Уважаемые читатели!</h2>

                                    <!--Text published-->
                                    <span class="intro"><p>Мы рады сообщить вам об открытии сайта газеты «За изобилие». Здесь вы узнаете свежие новости о всех аспектах жизни нашего района. Кроме того, у вас есть возможность дать оценку материалам газеты, задать вопросы и получить на них ответы. Посетителям сайта предоставится возможность посмотреть архив номеров газеты в РDF-формате, подписаться на электронную доставку свежего номера газеты, а также увидеть информацию, по тем или иным причинам не опубликованную в печатном номере газеты.</p></span>
                                </a>

                            </article>

                        </div>
                        <!--Анонс редактора-->

                    </article>


                </div>
            </article>
            <!--Колонка редактора-->
            <!--Главная статья, колонка редактора-->


        </div>

    </div>
    <!--Главная колонка для мобильной 768px-->
    <!--Новости от Инфорос для мобильной 768px-->
    <div class="main_mobile">

        <div class="main_collumn wrap_bottom">
            <!--Темы от Инфорос-->
            <article class="sys_top_main">

                <!--Header top-->
                <header><h1>События</h1></header>
                <!--Header top-->

                <article>

                    <!--Закладки новостей-->
                    <div id="tabbed_box_1" class="tabbed_box wrap_right">
                        <div class="tabbed_area">

                            <ul class="tabs">
                                <!--Header 1-->
                                <li><a href="javascript:tabSwitch('tab_4', 'content_4');" id="tab_4" class="tab_active"><h3>В регионе</h3></a></li>
                                <!--Header 2-->
                                <li><a href="javascript:tabSwitch('tab_5', 'content_5');" id="tab_5"><h3>В стране</h3></a></li>
                                <!--Header 3-->
                                <li><a href="javascript:tabSwitch('tab_6', 'content_6');" id="tab_6"><h3>В мире</h3></a></li>
                                <!--Header All-->
                                <li class="tab_all"><a href="index_news_list.html"><h3>Все</h3></a></li>
                            </ul>



                            <!--В Регионе - Content 1-->
                            <div id="content_4" class="content">

                                <!--Анонс Тема 01-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                                                    <span class="image" style="background-image:url(/media/DS_57L.jpg);"><img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>В Хабаровске прошел VIII Международный форум «Интеграция соотечественников»</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Якутское УФАС России привлекло к ответственности владельца интернет издания «Светский Якутск» к административной ответственности за распространение на сайте издания рекламы алкогольной продукции.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 01-->



                                <!--Анонс Тема 02-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_avatar_04.jpg);">
                              <img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Неоднозначный бабувизм: предпосылки и развитие</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Можно предположить, что смысл жизни может быть получен из опыта. Сомнение, как следует из вышесказанного, амбивалентно заполняет непредвиденный интеллект. Предмет деятельности непредвзято раскладывает на элементы сложный конфликт.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 02-->



                                <!--Анонс Тема 03-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_avatar_03.jpg);">
                              <img src="/img/empty.png"><img src=""></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Непредвиденный структурализм в XXI веке</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Герменевтика методологически рассматривается напряженный дедуктивный метод. Освобождение, по определению, выводит гений. По своим философским взглядам Дезами был материалистом и атеистом, последователем Гельвеция, однако исчисление предикатов ментально подрывает мир. Аксиома силлогизма осмысляет язык образов.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 03-->
                            </div>
                            <!--В Регионе - Content 1-->




                            <!--В Стране - Content 2-->
                            <div id="content_5" class="content">
                                <!--Анонс Тема 01-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                                                    <span class="image" style="background-image:url(/media/admin/lyji.jpg);"><img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Положительный полином в XXI веке</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Сумма ряда, исключая очевидный случай, определяет натуральный логарифм. Целое число изменяет критерий интегрируемости. Расходящийся ряд, исключая очевидный случай, проецирует сходящийся ряд.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 01-->



                                <!--Анонс Тема 02-->
                                <div class="top_main_item">


                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_01.jpg);">
                              <img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Прямоугольная матрица как предел функции</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Пустое подмножество порождает отрицательный определитель системы линейных уравнений. Векторное поле поразительно. Непрерывная функция, очевидно, развивает натуральный логарифм, что неудивительно. Интеграл по поверхности проецирует отрицательный интеграл Фурье.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 02-->


                                <!--Анонс Тема 03-->
                                <div class="top_main_item">


                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_02.jpg);">
                              <img src="/img/empty.png"><img src=""></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Действительный предел функции в XXI веке</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Геометрическая прогрессия, как следует из вышесказанного, определяет неопровержимый интеграл от функции, имеющий конечный разрыв. Интеграл Пуассона, не вдаваясь в подробности, изящно развивает математический анализ. То, что написано на этой странице неправда! Следовательно: интегрирование по частям категорически определяет равновероятный интеграл по бесконечной области.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 03-->
                            </div>
                            <!--В Стране - Content 2-->




                            <!--В Мире - Content 3-->
                            <div id="content_6" class="content">
                                <!--В Мире Тема 01-->
                                <div class="top_main_item">

                                    <!--Анонс Тема 01-->
                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                                                    <span class="image" style="background-image:url(/media/admin/image_user_pet_03.jpg);"><img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Огибающая семейства прямых как нормаль к поверхности</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Нормальное распределение, как следует из вышесказанного, усиливает возрастающий интеграл от функции, имеющий конечный разрыв. Замкнутое множество монотонно. Связное множество естественно нейтрализует невероятный интеграл по поверхности, откуда следует доказываемое равенство. Натуральный логарифм осмысленно проецирует интеграл по бесконечной области.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 01-->



                                <!--Анонс Тема 02-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_04.jpg);">
                              <img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Почему доступна социализация?</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Как отмечает Жан Пиаже, реакция иллюстрирует культурный тест, следовательно основной закон психофизики: ощущение изменяется пропорционально логарифму раздражителя . В заключении добавлю, ассоциация вызывает эмпирический гомеостаз. Филогенез, как бы это ни казалось парадоксальным, отражает гомеостаз.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 02-->


                                <!--Анонс Тема 03-->
                                <div class="top_main_item">

                                    <!--Анонс Тема 02-->
                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_05.jpg);">
                              <img src="/img/empty.png"><img src=""></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Сексуальный кризис: фрустрация или бессознательное?</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Проекция отчуждает сублимированный комплекс. Восприятие одинаково отталкивает ролевой контраст, в полном соответствии с основными законами развития человека. Филогенез отталкивает девиантный закон. Архетип, конечно, точно отчуждает импульс.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 03-->
                            </div>
                            <!--В Мире - Content 3-->




                        </div>

                    </div>


                </article>


            </article>
            <!--Темы от Инфорос-->

        </div>

    </div>
    <!--Новости от Инфорос для мобильной 768px-->
    <!--Средняя колонка для мобильной 768px-->
    <div class="middle_mobile">
        <div class="middle_collumn">
            <article class="sys_middle_collumn">

                <!--Рубрика 01-->
                <div class="top_main_middle">

                    <article>


                        <!--Image published -->
                        <div class="item_image">


                            <!--Header Рубрика-->
                            <a href="?module=articles&amp;action=view&amp;id=1">
                                <header><h3>Спорт</h3></header>
                            </a>
                            <!--Header Рубрика-->


                            <a href="?module=articles&amp;action=view&amp;id=97">
                                <span class="image" style="background-image:url(/media/DS_87L.jpg);"><img src="/img/empty.png"></span>
                            </a>
                        </div>

                        <!--Image published -->

                        <div class="article_content">
                            <a href="?module=articles&amp;action=view&amp;id=97">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="?comments=1">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 01-->






                <!--Рекламное место 05 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    <div class="banner_placement">
                        <div id="banner_5" class="banner_content banner_468_60">
                            <img src="/img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 05"> <span>Рекламный баннер 468x60 px 05</span>
                        </div>
                    </div>
                </div>
                <!--Рекламное место 05 баннер 468_60-->





                <!--Рубрика 02-->
                <div class="top_main_middle">

                    <article>

                        <a href="?module=articles&amp;action=view&amp;id=97">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Общество</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/DS_94L.jpg);"><img src="/img/empty.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="?module=articles&amp;action=view&amp;id=97">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="?comments=1">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 02-->






                <!--Рекламное место 06 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    <div class="banner_placement">
                        <div id="banner_6" class="banner_content banner_468_60">
                            <img src="/img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 06"> <span>Рекламный баннер 468x60 px 06</span>
                        </div>
                    </div>
                </div>
                <!--Рекламное место 06 баннер 468_60-->







                <!--Рубрика 03-->
                <div class="top_main_middle">

                    <article>

                        <a href="?module=articles&amp;action=view&amp;id=97">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Происшествия</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/0640023.jpg);"><img src="/img/empty.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="?module=articles&amp;action=view&amp;id=97">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="?comments=1">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 03-->





                <!--Рекламное место 07 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    <div class="banner_placement">
                        <div id="banner_7" class="banner_content banner_468_60">
                            <img src="/img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 07"> <span>Рекламный баннер 468x60 px 07</span>
                        </div>
                    </div>
                </div>
                <!--Рекламное место 07 баннер 468_60-->






                <!--Рубрика 04-->
                <div class="top_main_middle">

                    <article>

                        <a href="?module=articles&amp;action=view&amp;id=97">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Наука</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/0640011.jpg);"><img src="/img/empty.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="?module=articles&amp;action=view&amp;id=97">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="?comments=1">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 04-->






                <!--Рекламное место 08 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    <div class="banner_placement">
                        <div id="banner_8" class="banner_content banner_468_60">
                            <img src="/img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 08"> <span>Рекламный баннер 468x60 px 08</span>
                        </div>
                    </div>
                </div>
                <!--Рекламное место 08 баннер 468_60-->






                <!--Рубрика 05-->
                <div class="top_main_middle">

                    <article>

                        <a href="?module=articles&amp;action=view&amp;id=97">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Политика</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/DS_15L.jpg);"><img src="/img/empty.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="?module=articles&amp;action=view&amp;id=97">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="?comments=1">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 05-->






            </article>

        </div>
    </div>
    <!--Средняя колонка для мобильной 768px-->

    <!--------------------Десктопная версия статей на странице------------------->













    <!--Левая колонка-->
    <aside>

        <div class="left_collumn">
            <!--Левое меню -->
            <?
            use app\components\getMenuRubriks;
            echo getMenuRubriks::widget();
            ?>
            <!--Левое меню -->





            <!--Архив-->
            <article class="aside_item calendar wrap_bottom">

                <header class="header_item">
                    <h4>Архив</h4>
                </header>
                <div class="block">
                    <div class="datepicker"></div>
                </div>

            </article>
            <!--Архив-->


            <!--Рекламное место 08 баннер 234_60-->
            <div class="banner wrap_bottom" style="display:none;">
                [BANNER_8]
            </div>
            <!--Рекламное место 08 баннер 234_60-->




            <!--Анонсы новостей-->
            <?
            use app\components\NewsBlock;
            echo NewsBlock::widget();
            ?>
            <!--/Анонсы новостей-->




            <!--Подписка-->
            <div class="podpiska wrap_bottom">
                <ul>
                    <li><a href="index_subscribe.html"><img src="/img/icon_subscribe.svg"  alt="Подписаться на новости" />Подписаться на новости</a></li>
                </ul>
            </div>
            <!--Подписка-->




            <!--Рекламное место 09 баннер 234_60-->
            <div class="banner wrap_bottom" style="display:none;">
                [BANNER_9]
            </div>
            <!--Рекламное место 09 баннер 234_60-->




            <!--Анонсы комментарий-->
            <?
            use app\components\CommentsBlock;
            echo CommentsBlock::widget();
            ?>
            <!--Анонсы комментарий-->



            <!--Обратная связь-->
            <div class="podpiska wrap_bottom">
                <ul>
                    <li><a href="index_feedback.html"><img src="/img/icon_feedback.svg">Написать сообщение</a></li>
                </ul>
            </div>
            <!--Обратная связь-->


            <!--Письма читателей-->
            <div class="podpiska wrap_bottom">
                <ul>
                    <li><a href="index_mail_list.html"><img src="/img/icon_mail.svg" />Письма читателей</a></li>
                </ul>
            </div>
            <!--Письма читателей-->



            <!--Партнеры-->
            <?
            use app\components\getPartners;
            echo getPartners::widget();
            ?>
            <!--Партнеры-->


        </div>
    </aside>
    <!--Левая колонка-->






    <div class="main">

        <div class="main_collumn top_theme wrap_bottom">
            <!--Главная статья, колонка редактора-->
            <!--Тема номера-->
            <?= $content ?>
            <!--/Тема номера-->

            <div class="white_wrap"> &nbsp;</div>

            <!--Колонка редактора-->
            <article class="sys_top_main right_redactor">
                <div class="right_collumn">
                    <!--<div class="right_collumn">-->

                    <article class="aside_item">

                        <header class="header_item">
                            <h4>Колонка редактора</h4>
                        </header>


                        <!--Анонс редактора-->
                        <div class="public_item">


                            <article>

                                <a href="index_article_redactor.html">
                                    <!--Image published-->
                                    <div class="item_image">
                                        <span class="image" style="background-image:url(/media/10.jpg);"><img src="/img/empty.png"></span>
                                    </div>

                                    <!--Date published-->
                                    <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>


                                    <!--Header published-->
                                    <h2>Уважаемые читатели!</h2>

                                    <!--Text published-->
                                    <span class="intro"><p>Мы рады сообщить вам об открытии сайта газеты «За изобилие». Здесь вы узнаете свежие новости о всех аспектах жизни нашего района. Кроме того, у вас есть возможность дать оценку материалам газеты, задать вопросы и получить на них ответы. Посетителям сайта предоставится возможность посмотреть архив номеров газеты в РDF-формате, подписаться на электронную доставку свежего номера газеты, а также увидеть информацию, по тем или иным причинам не опубликованную в печатном номере газеты.</p></span>
                                </a>

                            </article>

                        </div>
                        <!--Анонс редактора-->

                    </article>


                </div>
            </article>
            <!--Колонка редактора-->
            <!--Главная статья, колонка редактора-->

        </div>

    </div>



    <!--Рекламное место 03 баннер 728x90-->
    <div class="banner main_banner wrap_bottom" style="display:none;">
        [BANNER_3]
    </div>
    <!--Рекламное место 03 баннер 728x90-->





    <!--Новости от Инфорос-->
    <div class="main">

        <div class="main_collumn wrap_bottom">
            <!--Темы от Инфорос-->
            <article class="sys_top_main">

                <!--Header top-->
                <header><h1>События</h1></header>
                <!--Header top-->

                <article>

                    <!--Закладки новостей-->
                    <div id="tabbed_box_1" class="tabbed_box">
                        <div class="tabbed_area">

                            <ul class="tabs">
                                <!--Header 1-->
                                <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="tab_active"><h3>В регионе</h3></a></li>
                                <!--Header 2-->
                                <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2"><h3>В стране</h3></a></li>
                                <!--Header 3-->
                                <li><a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3"><h3>В мире</h3></a></li>
                                <!--Header All-->
                                <li class="tab_all"><a href="index_news_list.html"><h3>Все</h3></a></li>
                            </ul>



                            <!--В Регионе - Content 1-->
                            <div id="content_1" class="content">

                                <!--Анонс Тема 01-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                                                    <span class="image" style="background-image:url(/media/DS_57L.jpg);"><img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>В Хабаровске прошел VIII Международный форум «Интеграция соотечественников»</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Якутское УФАС России привлекло к ответственности владельца интернет издания «Светский Якутск» к административной ответственности за распространение на сайте издания рекламы алкогольной продукции.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 01-->



                                <!--Анонс Тема 02-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_avatar_04.jpg);">
                              <img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Неоднозначный бабувизм: предпосылки и развитие</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Можно предположить, что смысл жизни может быть получен из опыта. Сомнение, как следует из вышесказанного, амбивалентно заполняет непредвиденный интеллект. Предмет деятельности непредвзято раскладывает на элементы сложный конфликт.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 02-->



                                <!--Анонс Тема 03-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_avatar_03.jpg);">
                              <img src="/img/empty.png"><img src=""></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Непредвиденный структурализм в XXI веке</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Герменевтика методологически рассматривается напряженный дедуктивный метод. Освобождение, по определению, выводит гений. По своим философским взглядам Дезами был материалистом и атеистом, последователем Гельвеция, однако исчисление предикатов ментально подрывает мир. Аксиома силлогизма осмысляет язык образов.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 03-->
                            </div>
                            <!--В Регионе - Content 1-->




                            <!--В Стране - Content 2-->
                            <div id="content_2" class="content">
                                <!--Анонс Тема 01-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                                                    <span class="image" style="background-image:url(/media/admin/lyji.jpg);"><img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Положительный полином в XXI веке</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Сумма ряда, исключая очевидный случай, определяет натуральный логарифм. Целое число изменяет критерий интегрируемости. Расходящийся ряд, исключая очевидный случай, проецирует сходящийся ряд.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 01-->



                                <!--Анонс Тема 02-->
                                <div class="top_main_item">


                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_01.jpg);">
                              <img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Прямоугольная матрица как предел функции</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Пустое подмножество порождает отрицательный определитель системы линейных уравнений. Векторное поле поразительно. Непрерывная функция, очевидно, развивает натуральный логарифм, что неудивительно. Интеграл по поверхности проецирует отрицательный интеграл Фурье.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 02-->


                                <!--Анонс Тема 03-->
                                <div class="top_main_item">


                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_02.jpg);">
                              <img src="/img/empty.png"><img src=""></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Действительный предел функции в XXI веке</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Геометрическая прогрессия, как следует из вышесказанного, определяет неопровержимый интеграл от функции, имеющий конечный разрыв. Интеграл Пуассона, не вдаваясь в подробности, изящно развивает математический анализ. То, что написано на этой странице неправда! Следовательно: интегрирование по частям категорически определяет равновероятный интеграл по бесконечной области.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 03-->
                            </div>
                            <!--В Стране - Content 2-->




                            <!--В Мире - Content 3-->
                            <div id="content_3" class="content">
                                <!--В Мире Тема 01-->
                                <div class="top_main_item">

                                    <!--Анонс Тема 01-->
                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                                                    <span class="image" style="background-image:url(/media/admin/image_user_pet_03.jpg);"><img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Огибающая семейства прямых как нормаль к поверхности</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Нормальное распределение, как следует из вышесказанного, усиливает возрастающий интеграл от функции, имеющий конечный разрыв. Замкнутое множество монотонно. Связное множество естественно нейтрализует невероятный интеграл по поверхности, откуда следует доказываемое равенство. Натуральный логарифм осмысленно проецирует интеграл по бесконечной области.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 01-->



                                <!--Анонс Тема 02-->
                                <div class="top_main_item">

                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_04.jpg);">
                              <img src="/img/empty.png"></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Почему доступна социализация?</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Как отмечает Жан Пиаже, реакция иллюстрирует культурный тест, следовательно основной закон психофизики: ощущение изменяется пропорционально логарифму раздражителя . В заключении добавлю, ассоциация вызывает эмпирический гомеостаз. Филогенез, как бы это ни казалось парадоксальным, отражает гомеостаз.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 02-->


                                <!--Анонс Тема 03-->
                                <div class="top_main_item">

                                    <!--Анонс Тема 02-->
                                    <div class="public_item">

                                        <article>

                                            <a href="index_news.html">
                                                <div class="item_image">
                              <span class="image" style="background-image:url(/media/admin/image_user_pet_05.jpg);">
                              <img src="/img/empty.png"><img src=""></span>
                                                </div>


                                                <!--Date published-->
                                                <p><time itemprop="datePublished" datetime="2014-10-08">2017-10-02</time></p>


                                                <!--Header published-->
                                                <h2>Сексуальный кризис: фрустрация или бессознательное?</h2>

                                                <!--Text published-->
                                                <span class="intro"><p>Проекция отчуждает сублимированный комплекс. Восприятие одинаково отталкивает ролевой контраст, в полном соответствии с основными законами развития человека. Филогенез отталкивает девиантный закон. Архетип, конечно, точно отчуждает импульс.</p></span>
                                            </a>

                                        </article>

                                    </div>
                                </div>
                                <!--Анонс Тема 03-->
                            </div>
                            <!--В Мире - Content 3-->




                        </div>

                    </div>


                </article>


            </article>
            <!--Темы от Инфорос-->

        </div>

    </div>
    <!--Новости от Инфорос-->




    <!--Рекламное место 04 баннер 728x90-->

    <div class="banner main_banner wrap_bottom" style="display:none;">
        [BANNER_4]
    </div>
    <!--Рекламное место 04 баннер 728x90-->


    <!--Средняя колонка-->
    <div class="middle">
        <div class="middle_collumn wrap_bottom">
            <article class="sys_middle_collumn">
                <!--Рубрика 01-->
                <div class="top_main_middle">
                    <article>
                        <!--Image published -->
                        <div class="item_image">
                            <!--Header Рубрика-->
                            <a href="index_article_list.html">
                                <header><h3>Спорт</h3></header>
                            </a>
                            <!--Header Рубрика-->
                            <a href="index_article.html">
                                <span class="image" style="background-image:url(/media/DS_87L.jpg);"><img src="/img/empty_sq.png"></span>
                            </a>
                        </div>
                        <!--Image published -->
                        <div class="article_content">
                            <a href="index_article.html">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->
                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->
                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>
                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="index_article.html">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 01-->






                <!--Рекламное место 05 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    [BANNER_5]
                </div>
                <!--Рекламное место 05 баннер 468_60-->





                <!--Рубрика 02-->
                <div class="top_main_middle">

                    <article>

                        <a href="index_article_list.html">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Общество</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/DS_94L.jpg);"><img src="/img/empty_sq.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="index_article.html">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="index_article.html">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 02-->






                <!--Рекламное место 06 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    [BANNER_6]
                </div>
                <!--Рекламное место 06 баннер 468_60-->







                <!--Рубрика 03-->
                <div class="top_main_middle">

                    <article>

                        <a href="index_article_list.html">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Происшествия</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/0640023.jpg);"><img src="/img/empty_sq.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="index_article.html">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="index_article.html">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 03-->





                <!--Рекламное место 07 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    [BANNER_7]
                </div>
                <!--Рекламное место 07 баннер 468_60-->






                <!--Рубрика 04-->
                <div class="top_main_middle">

                    <article>

                        <a href="index_article_list.html">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Наука</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/0640011.jpg);"><img src="/img/empty_sq.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="index_article.html">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="index_article.html">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 04-->






                <!--Рекламное место 08 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    [BANNER_8]
                </div>
                <!--Рекламное место 08 баннер 468_60-->






                <!--Рубрика 05-->
                <div class="top_main_middle">

                    <article>

                        <a href="index_article_list.html">
                            <!--Image published -->
                            <div class="item_image">
                                <!--Header Рубрика-->
                                <header><h3>Политика</h3></header>
                                <!--Header Рубрика-->
                                <span class="image" style="background-image:url(/media/DS_15L.jpg);"><img src="/img/empty_sq.png"></span>
                            </div>
                        </a>
                        <!--Image published -->

                        <div class="article_content">
                            <a href="index_article.html">
                                <!--Header published-->
                                <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                                <!--Header published-->

                                <!--Date published-->
                                <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                                <!--Date published-->

                                <!--Intro published -->
                                <span class="intro"><p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p></span>
                                <!--Intro published -->
                            </a>

                            <footer>
                                <!--Статистика-->
                                <div class="stat">

                                    <!--Просмотры-->
                                    <div class="view">
                                        <div class="icon"><img src="/img/Icon_view.svg" alt="Поросмотров:"></div>
                                        <div class="content wrap_right">896</div>
                                    </div>
                                    <!--Просмотры-->

                                    <!--Комментарии-->
                                    <div class="comment">
                                        <a itemprop="discussionUrl" href="index_article.html">
                                            <div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
                                            <div class="content wrap_right">243</div>
                                        </a>
                                    </div>
                                    <!--Комментарии-->

                                </div>
                                <!--Статистика-->
                            </footer>
                        </div>

                    </article>


                </div>
                <!--Рубрика 05-->




                <!--Топ статей-->
                <div class="top_main_middle top_articles">

                    <!--Header Топ статей-->
                    <header><h3>Топ статей</h3></header>
                    <!--Header Топ статей-->

                    <!--Читаемые-->
                    <h4>Читаемые:</h4>
                    <div class="top_reading">
                        <ul class="tabs-list">
                            [setting_11]
                        </ul>
                    </div>


                    <!--Комментируемые-->
                    <h4>Комментируемые:</h4>
                    <div class="top_commeting">





                    </div>

                </div>
                <!--Топ статей-->


                <!--Рекламное место 09 баннер 468_60-->
                <div class="banner wrap_bottom" style="display:none;">
                    [BANNER_9]
                </div>
                <!--Рекламное место 09 баннер 468_60-->


                <!--Одной строкой-->
                <div class="top_main_middle top_articles" id="one-string">

                    <!--Header Топ статей-->
                    <header><h3>Одной строкой</h3></header>
                    <!--Header Топ статей-->



                    <ul class="jcarousel-skin-tango" data-visible="1">
                        <li><span class="h_2 name"><h2>Покупайте в Колпне!</h2></span></li>
                        <li><span class="h_2 name"><h2>Покупайте все Орловское!</h2></span></li>
                        <li><span class="h_2 name"><h2>Покупайте российское!</h2></span></li>
                        <li><span class="h_2 name"><h2>Заместителем главы администрации назначен Евгений Николаевич Астапов</h2></span></li>
                        <li><span class="h_2 name"><h2>По итогам зрительского голосования на конкурсе Евровидение-2016 в Стокгольме победителем стал Сергей Лазарев</h2></span></li>
                        <li><span class="h_2 name"><h2>Заместителем главы администрации по социальным вопросам назначена Наталья Александровна Строганова</h2></span></li>
                        <li><span class="h_2 name"><h2>Председателем Совета ветеранов избран Валерий Николаевич Пнюшков</h2>
	</span></li>
                        <li><span class="h_2 name"><h2>Главой Озёрского городского округа депутаты Совета единогласно избрали В.В. Никонорова</h2></span></li>
                        <li><span class="h_2 name"><h2>17 декабря МФЦ - многофункциональному центру исполнился год</h2></span></li>
                    </ul>





                </div>
                <!--Одной строкой-->






            </article>

        </div>
    </div>
    <!--Средняя колонка-->






    <!--Правая колонка-->
    <div class="right">
        <!--<div class="right_collumn" style="background:rgba(153,153,153,0.2)">-->
        <div class="right_collumn">






            <!--Рекламное место 12 баннер 234_60-->
            <div class="banner wrap_bottom" style="display:none;">
                [BANNER_12]
            </div>
            <!--Рекламное место 12 баннер 234_60-->




            <!--Анонсы фотогаллерей-->
            <article class="aside_item wrap_bottom">

                <header class="header_item">
                    <h4>Фотогаллерея</h4><a href="index_fotogallery_list.html" class="see_all">Все</a>
                </header>
                <medialist>


            </article>
            <!--Анонсы фотогаллерей-->



            <!--Рекламное место 11 баннер 234_60-->
            <div class="banner wrap_bottom" style="display:none;">
                [BANNER_11]
            </div>
            <!--Рекламное место 11 баннер 234_60-->

            <!--Анонсы объявлений-->
            <article class="wrap_bottom">
                <header class="header_item">
                    <h4>Объявления</h4><a href="index_board_list.html" class="see_all">Все</a>
                </header>
                <!--Анонс ads 01-->
                <div class="public_item ads wrap_left wrap_right wrap_main">
                    <article>
                        <!--Header published-->
                        <a href="index_board_theme.html" class="link_name"><h2>Квартиры</h2></a>
                        <!--Text published-->
                        <p><a href="index_board.html" title="Сниму" class="link_name"><span class="name">Сниму</span></a><span class="view">879</span></p>
                        <p><a href="index_board.html" title="Сдаю" class="link_name"><span class="name">Сдаю</span></a><span class="view">13</span></p>
                        <p><a href="index_board.html" title="Куплю" class="link_name"><span class="name">Куплю</span></a><span class="view">37</span></p>
                        <p><a href="index_board.html" title="Продам" class="link_name"><span class="name">Продам</span></a><span class="view">15</span></p>
                    </article>
                </div>
                <!--Анонс ads 01-->


                <!--Анонс ads 02-->
                <div class="public_item ads wrap_left wrap_right wrap_main">
                    <article>
                        <!--Header published-->
                        <a href="index_board_theme.html" class="link_name"><h2>Автомобили</h2></a>



                        <!--Text published-->
                        <p><a href="index_board.html" title="Куплю" class="link_name"><span class="name">Куплю</span></a><span class="view">37</span></p>
                        <p><a href="index_board.html" title="Продам" class="link_name"><span class="name">Продам</span></a><span class="view">15</span></p>

                    </article>

                </div>
                <!--Анонс ads 02-->








            </article>
            <!--Анонсы объявлений-->




            <!--Рекламное место 10 баннер 234_60-->
            <div class="banner wrap_bottom" style="display:none;">
                [BANNER_10]
            </div>
            <!--Рекламное место 10 баннер 234_60-->



            <!--Предприятия-->
            <article class="aside_item catalog wrap_bottom">


                <header class="header_item">
                    <h4>Каталог предприятий</h4>
                </header>

                {catRubrics}

                <footer style="display: block;">
                    <p class="more" style="display: none;"><a href="#" class="">Развернуть список</a></p>
                    <p class="more" style="display: block;"><a href="#" class="">Свернуть список</a></p>
                </footer>
            </article>
            <!--Предприятия-->





            <!--Голосование-->
            <article class="aside_item vote wrap_bottom">

                <header class="header_item">
                    <h4>Голосование</h4>
                    <script type="text/javascript">function pushVote(obj) {var id = obj.find("input").val();var val = obj.find("input[name=vote]:checked").val();values = {id: id, vote: val};var html = "";$.ajax({url: "/?voted=1",type: "POST",data: values,context: document.body}).done(function(msg) {html = msg;});obj.html(html);}</script>
                </header>

                <div class="public_item">
                    <div class="poll block">
                        <vote>
                    </div>
                </div>

            </article>
            <!--/Голосование-->



            <!--Вопрос ответ-->
            <article class="aside_item wrap_bottom">
                <header class="header_item">
                    <h4>Вопрос-ответ</h4><a href="index_question_answer_list.html" class="see_all">Все</a>
                </header>
                <qa>
            </article>
            <!--Вопрос ответ-->





        </div>
    </div>
    <!--Правая колонка-->





</section>
<!--Main-->







<!--Footer-->
<footer>
    <div class="footer_content">
        <!--Меню футера-->
        <menu class="footer_menu wrap_main">
            <ul>
                <li><a href="index_news_list.html" >Новости</a></li>
                <li><a href="index_about.html" >О газете</a></li>
                <li><a href="index_subscribe.html" >Подписка</a></li>
                <li><a href="index_archive.html" >Архив номеров</a></li>
                <li><a href="index_catalog_list.html" >Каталог</a></li>
                <li><a href="index_article.html" >Контакты</a></li>
            </ul>


        </menu>
        <!--Меню футера-->

        <div class="footer_content_main">

            <div class="footer_copy">


                <div class="footer_left wrap_right wrap_main">
                    <p>© 2018, Создание сайта - <a href="http://inforos.ru">Инфорос</a></p>

                    <p>Адрес редакции:<br>
                        303410, Орловская область, Колпнянский район, п.Колпна, ул.Свободы, д.5</p>
                    <p>E-mail: <a href="mailto:za.izobilie@yandex.ru" title="Написать письмо" target="_blank">za.izobilie@yandex.ru</a></p>
                    <p>Телефоны для справок:<br>
                        8 (48674) 2-18-63<br>
                        8 (920) 822-43-05</p>
                </div>




                <div class="footer_left wrap_right wrap_main">
                    <p>Мнение редакции не всегда совпадает с мнением автора.</p>
                    <p>За достоверность содержания рекламы ответственность несет рекламодатель</p>


                    <!--Социальные кнопки-->
                    <!--Facebook-->
                    <div class="social_represent_item">
                        <a href="https://www.facebook.com/#" target="_blank" title="Мы в Facebook" class="social_btn_fb"><i class="icon icon_facebook"></i></a>
                    </div>

                    <!--VKontakte-->
                    <div class="social_represent_item">
                        <a href="https://vk.com/#" target="_blank" title="Мы в ВКонтакте" class="social_btn_vk"><i class="icon icon_vk"></i></a>
                    </div>

                    <!--Odnoklassniki-->
                    <div class="social_represent_item">
                        <a href="https://ok.ru/#" target="_blank" title="Мы в Одноклассниках" class="social_btn_odnoklass"><i class="icon icon_odnoklass"></i></a>
                    </div>


                    <!--Социальные кнопки-->

                </div>



                <div class="footer_right wrap_main">

                    <p>Газета зарегистрирована Управлением Федеральной службы по надзору в сфере связи, информационных технологий и массовых коммуникаций по Орловской области.</p>
                    <p>Свидетельство ПИ № ТУ31-00273 от 21 марта 2016 г.</p>

                    <!--Скрыть-показать баннеры-->
                    <div id="showBanner" style="cursor:pointer;">
                        <p>
                            <span style="display: block;"><a href="#">Показать баннерные места</a></span>
                            <span style="display: none;"><a href="#">Скрыть баннерные места</a></span>
                        </p>
                    </div>
                    <!--Скрыть-показать баннеры-->

                </div>
            </div>
        </div>



        <!--Кнопка Наверх-->
        <div class="to_top" title="Наверх"></div>
        <!--Кнопка Наверх-->


        <div class="footer_shadow"></div>



    </div>



</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
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
<title><?= Html::encode(\yii::$app->view->title) ?></title>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>

<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="alternate" type="application/rss+xml" href="/rss.php" title="RSS Новости">

<!--stylesheet -->
<link rel="stylesheet" type="text/css" href="/css/font_new.css">
<link rel="stylesheet" type="text/css" href="/css/main_new.css">

<!--Стили закладок для новостей от Инфорос-->
<link rel="stylesheet" type="text/css" href="/css/tab_new.css">
<!--Стили закладок для новостей от Инфорос-->

<!--Стили рекламных баннеров-->
<link rel="stylesheet" type="text/css" href="/css/adds_banners.css">
<!--Стили рекламных баннеров-->

<!--Стили popup окон-->
<link rel="stylesheet" type="text/css" href="/css/pop_up.css">
<!--Стили popup окон-->

<!--Стили формы поиска в каталоге предприятий-->
<link rel="stylesheet" type="text/css" href="/css/helpers.css">
<!--Стили формы поиска в каталоге предприятий-->

<!--Стили для печати-->
<link rel="stylesheet" type="text/css" href="/css/print.css">
<!--Стили для печати-->

<link rel="stylesheet" type="text/css" href="/css/wrap_new.css">
<link rel="stylesheet" type="text/css" href="/css/layout_new.css">
<link rel="stylesheet" type="text/css" href="/css/smoothness/jquery-ui-1.9.0.custom.min.css">
<link rel="stylesheet" type="text/css" href="/css/datepicker_new.css">
<link rel="stylesheet" type="text/css" href="/css/chosen.css">
<link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">

<!--Стили для карусели-->
<link rel="stylesheet" type="text/css" href="/css/jcarousel.css">
<link rel="stylesheet" type="text/css" href="/css/jcarousel_top.css">
<!--Стили для карусели-->

<!--Java scripts -->
<script src="/js/vendor/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/js/vendor/jquery.placeholder.js"></script>
<script type="text/javascript" src="/js/vendor/jquery.collapsorz.js"></script>
<script type="text/javascript" src="/js/vendor/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/js/vendor/jquery-ui-1.9.0.custom.min.js"></script>
<script type="text/javascript" src="/js/vendor/chosen.jquery.min.js"></script>
<script type="text/javascript" src="/js/jsibox_basic.js"></script>
<style type="text/css">#jsiMainBox * {margin: 0; padding: 0; border: 0; text-decoration: none;} #jsiMainBox a.jsiBtn {outline: none; float:right; color: #fff; font-size: 30px;  vertical-align:middle;font-weight:normal; } </style><style type="text/css">.ya-share2,
.ya-share2 * {
  line-height: normal;
}
.ya-share2 :link:hover,
.ya-share2 :visited:hover {
  color: #000 !important;
}
.ya-share2 input {
  color: inherit;
  font: inherit;
  margin: 0;
  line-height: normal;
}
.ya-share2__container_size_m {
  font-size: 13px;
}
.ya-share2__container_size_m .ya-share2__icon {
  height: 24px;
  width: 24px;
  background-size: 24px 24px;
}
.ya-share2__container_size_m .ya-share2__title {
  line-height: 24px;
}
.ya-share2__container_size_m .ya-share2__item {
  margin: 5px 4px 5px 0;
}
.ya-share2__container_size_m .ya-share2__item:last-child {
  margin-right: 0;
}
.ya-share2__container_size_m .ya-share2__counter {
  font-size: 12px;
  line-height: 24px;
  padding: 0 8px;
}
.ya-share2__container_size_m .ya-share2__counter:before {
  margin-left: -8px;
}
.ya-share2__container_size_m .ya-share2__icon_more:before {
  font-size: 12px;
  line-height: 24px;
}
.ya-share2__container_size_m .ya-share2__popup {
  padding: 5px 10px;
}
.ya-share2__container_size_m .ya-share2__popup_direction_bottom {
  top: 28px;
}
.ya-share2__container_size_m .ya-share2__popup_direction_top {
  bottom: 28px;
}
.ya-share2__container_size_m .ya-share2__input_copy {
  width: 140px;
}
.ya-share2__container_size_m .ya-share2__badge + .ya-share2__title {
  margin-left: 10px;
}
.ya-share2__container_size_s {
  font-size: 12px;
}
.ya-share2__container_size_s .ya-share2__icon {
  height: 18px;
  width: 18px;
  background-size: 18px 18px;
}
.ya-share2__container_size_s .ya-share2__title {
  line-height: 18px;
}
.ya-share2__container_size_s .ya-share2__item {
  margin: 3px 4px 3px 0;
}
.ya-share2__container_size_s .ya-share2__item:last-child {
  margin-right: 0;
}
.ya-share2__container_size_s .ya-share2__counter {
  font-size: 10px;
  line-height: 18px;
  padding: 0 6px;
}
.ya-share2__container_size_s .ya-share2__counter:before {
  margin-left: -6px;
}
.ya-share2__container_size_s .ya-share2__icon_more:before {
  font-size: 10px;
  line-height: 18px;
}
.ya-share2__container_size_s .ya-share2__popup {
  padding: 3px 6px;
}
.ya-share2__container_size_s .ya-share2__popup_direction_bottom {
  top: 21px;
}
.ya-share2__container_size_s .ya-share2__popup_direction_top {
  bottom: 21px;
}
.ya-share2__container_size_s .ya-share2__input_copy {
  width: 110px;
}
.ya-share2__container_size_s .ya-share2__badge + .ya-share2__title {
  margin-left: 6px;
}
.ya-share2__list_direction_horizontal > .ya-share2__item {
  display: inline-block;
  vertical-align: top;
  margin-top: 0;
  margin-bottom: 0;
}
.ya-share2__list_direction_horizontal > .ya-share2__item > .ya-share2__link > .ya-share2__title {
  display: none;
}
.ya-share2__list_direction_vertical > .ya-share2__item {
  display: block;
  margin-right: 0;
}
.ya-share2__list_direction_vertical > .ya-share2__item > .ya-share2__link > .ya-share2__badge > .ya-share2__counter {
  display: none;
}
.ya-share2__list {
  display: inline-block;
  vertical-align: top;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.ya-share2__item {
  font-family: Arial, sans;
  display: inline-block;
}
.ya-share2__item:hover {
  opacity: 0.9;
}
.ya-share2__link {
  display: inline-block;
  vertical-align: top;
  text-decoration: none;
  white-space: nowrap;
}
.ya-share2__badge {
  display: inline-block;
  vertical-align: top;
  border-radius: 2px;
  color: #fff;
  overflow: hidden;
  position: relative;
}
.ya-share2__icon {
  display: inline-block;
  vertical-align: top;
}
.ya-share2__icon:active {
  box-shadow: inset 0 2px 0 0 rgba(0,0,0,0.1);
}
.ya-share2__counter {
  display: none;
}
.ya-share2__counter:before {
  content: "";
  position: absolute;
  width: 1px;
  top: 2px;
  bottom: 2px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMz/za5cAAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=") 0 0 repeat-y;
}
.ya-share2__counter_visible {
  display: inline-block;
}
.ya-share2__title {
  display: inline-block;
  color: #000;
  vertical-align: bottom;
}
.ya-share2__title:hover {
  color: #f00;
}
.ya-share2__item_more {
  position: relative;
}
.ya-share2__item_more:hover {
  opacity: 1;
}
.ya-share2__icon_more {
  background-color: #fff;
  border: 1px solid #cdcdcd;
  box-sizing: border-box;
  position: relative;
}
.ya-share2__icon_more:before {
  content: '•••';
  color: #a0a0a0;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  text-align: center;
}
.ya-share2__popup {
  position: absolute;
  display: none;
  border: 1px solid #e6e6e6;
  z-index: 9999;
  background-color: #fff;
}
.ya-share2__popup_direction_bottom {
  box-shadow: 0 10px 20px -5px rgba(0,0,0,0.4);
}
.ya-share2__popup_direction_top {
  box-shadow: 0 0 20px -5px rgba(0,0,0,0.4);
}
.ya-share2__popup_list-direction_horizontal {
  right: 0;
}
.ya-share2__popup_list-direction_vertical {
  left: 0;
}
.ya-share2__popup_visible {
  display: block;
}
.ya-share2__popup_clipboard .ya-share2__input_copy,
.ya-share2__link_copy {
  display: none;
}
.ya-share2__popup_clipboard .ya-share2__link_copy {
  display: inline-block;
}

.ya-share2__item_service_blogger .ya-share2__badge
{
    background-color: #fb8f3d;
}

.ya-share2__item_service_blogger .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M19.896 14.833A5.167 5.167 0 0 1 14.729 20H9.166A5.167 5.167 0 0 1 4 14.833V9.167A5.166 5.166 0 0 1 9.166 4h2.608a5.167 5.167 0 0 1 5.167 5.167l.002.011c.037.536.484.96 1.03.96l.018-.002h.872c.57 0 1.034.463 1.034 1.034l-.001 3.663zM9.038 10.176h2.926a.993.993 0 0 0 0-1.987H9.038a.994.994 0 0 0 0 1.987zm5.867 3.83H9.032a.94.94 0 0 0 0 1.879h5.873a.94.94 0 1 0 0-1.88z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_collections .ya-share2__badge
{
    background-color: #eb1c00;
}

.ya-share2__item_service_collections .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 18l5-2.71L17 18V6H7v12z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_delicious .ya-share2__badge
{
    background-color: #31a9ff;
}

.ya-share2__item_service_delicious .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 12h8v8H4zm8-8h8v8h-7.984z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_digg .ya-share2__badge
{
    background-color: #000;
}

.ya-share2__item_service_digg .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.555 10.814V14.1h.96s.18.005.18-.222v-3.287h-.96s-.18-.006-.18.222zm8.032 3.065v-3.287h-.96s-.18-.006-.18.222V14.1h.96s.18.006.18-.222zm-5.306 1.32c0 .227-.18.222-.18.222H4V9.497c0-.227.18-.222.18-.222h2.514V7.222c0-.227.18-.222.18-.222h1.408l-.001 8.199zm2.065 0c0 .227-.18.221-.18.221H8.761V9.496c0-.226.18-.221.18-.221h1.406v5.924zm0-7.103c0 .227-.18.222-.18.222H8.76V7.222c0-.227.18-.222.18-.222h1.408l-.001 1.096zm4.827 9.21c0 .228-.18.223-.18.223h-4.1v-1.096c0-.227.18-.222.18-.222h2.513v-.79h-2.694V9.497c0-.227.18-.222.18-.222l4.102.003v8.029zm4.826 0c0 .228-.18.223-.18.223h-4.1v-1.096c0-.227.18-.222.18-.222h2.514v-.79h-2.695V9.497c0-.227.18-.222.18-.222L20 9.279v8.028zm-1.585-3.427v-3.287h-.96s-.18-.006-.18.222V14.1h.96s.18.006.18-.222z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_evernote .ya-share2__badge
{
    background-color: #24d666;
}

.ya-share2__item_service_evernote .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M6.277 7.109h1.517c.08 0 .16-.08.16-.16V5.313c0-.28.08-.559.159-.758l.04-.12L5.2 7.348l.16-.08c.239-.12.558-.16.917-.16zm11.654-.28c-.12-.638-.479-.917-.838-1.037-.36-.12-.718-.28-1.676-.4-.759-.08-1.557-.12-2.116-.12-.16-.438-.399-.917-1.317-1.156-.638-.16-1.796-.12-2.155-.08-.559.08-.758.319-.918.479-.16.16-.28.598-.28.878v1.556c0 .48-.318.838-.877.838H6.397c-.32 0-.559.04-.758.12-.16.12-.32.28-.4.4-.2.279-.239.598-.239.957 0 0 0 .28.08.798.04.4.479 3.033.878 3.911.16.36.28.48.599.639.718.32 2.354.639 3.152.758.759.08 1.278.32 1.557-.279 0 0 .04-.16.12-.36a6.3 6.3 0 0 0 .28-1.915c0-.04.079-.04.079 0 0 .36-.08 1.557.838 1.876.36.12 1.118.24 1.876.32.678.079 1.197.358 1.197 2.114 0 1.078-.24 1.238-1.397 1.238-.958 0-1.317.04-1.317-.759 0-.598.599-.558 1.078-.558.2 0 .04-.16.04-.52 0-.398.24-.598 0-.598-1.557-.04-2.475 0-2.475 1.956 0 1.796.679 2.115 2.914 2.115 1.756 0 2.354-.04 3.073-2.275.16-.439.479-1.796.678-4.03.16-1.478-.12-5.788-.319-6.866zm-3.033 4.75c-.2 0-.32 0-.519.04h-.08s-.04 0-.04-.04v-.04c.08-.4.28-.878.878-.878.639.04.799.599.799 1.038v.04c0 .04-.04.04-.04.04-.04 0-.04 0-.04-.04-.28-.08-.599-.12-.958-.16z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_facebook .ya-share2__badge
{
    background-color: #3b5998;
}

.ya-share2__item_service_facebook .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M13.423 20v-7.298h2.464l.369-2.845h-2.832V8.042c0-.824.23-1.385 1.417-1.385h1.515V4.111A20.255 20.255 0 0 0 14.148 4c-2.183 0-3.678 1.326-3.678 3.76v2.097H8v2.845h2.47V20h2.953z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_gplus .ya-share2__badge
{
    background-color: #dc4e41;
}

.ya-share2__item_service_gplus .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M9.09 11.364v1.745h2.888c-.116.75-.873 2.196-2.887 2.196-1.738 0-3.156-1.44-3.156-3.214 0-1.775 1.418-3.215 3.156-3.215.989 0 1.65.422 2.029.786l1.382-1.331C11.615 7.5 10.465 7 9.09 7A5.087 5.087 0 0 0 4 12.09a5.087 5.087 0 0 0 5.09 5.092c2.94 0 4.888-2.066 4.888-4.975 0-.334-.036-.589-.08-.843H9.091zm10.91 0h-1.455V9.909h-1.454v1.455h-1.455v1.454h1.455v1.455h1.454v-1.455H20' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_linkedin .ya-share2__badge
{
    background-color: #0083be;
}

.ya-share2__item_service_linkedin .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4.246 8.954h3.41v10.281h-3.41zm1.725-4.935c-1.167 0-1.929.769-1.929 1.776 0 .987.74 1.777 1.884 1.777h.022c1.19 0 1.93-.79 1.93-1.777-.023-1.007-.74-1.776-1.907-1.776zm10.052 4.715c-1.81 0-2.62.997-3.073 1.698V8.976H9.54c.045.965 0 10.281 0 10.281h3.41v-5.742c0-.307.022-.614.112-.834.246-.613.807-1.25 1.75-1.25 1.233 0 1.727.944 1.727 2.325v5.501h3.41v-5.896c0-3.158-1.683-4.627-3.926-4.627z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_lj .ya-share2__badge
{
    background-color: #0d425a;
}

.ya-share2__item_service_lj .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cpath d='M17.815 13.3c.438 2.114.868 4.221 1.306 6.336.037.178-.148.385-.334.311-2.025-.741-4.006-1.49-6.01-2.24a.625.625 0 0 1-.318-.23l-7.39-8.903c-.067-.082-.082-.215-.06-.32.312-1.23.72-2.143 1.752-3.019C7.799 4.36 8.779 4.1 10.047 4.004c.156-.015.223.014.312.133 2.418 2.909 4.837 5.817 7.248 8.725a.888.888 0 0 1 .208.438z' fill='%23FFF'/%3E%3Cpath d='M6.175 8.462c.69-1.795 2.3-3.004 3.835-3.301l-.185-.223a4.242 4.242 0 0 0-3.85 3.272l.2.252z' fill='%230D425A'/%3E%3Cpath d='M10.53 5.792c-1.744.326-3.124 1.513-3.851 3.271l.905 1.091c.787-1.78 2.3-2.997 3.836-3.302l-.89-1.06zm2.76 7.827L9.364 8.9a6.119 6.119 0 0 0-1.269 1.87l4.89 5.89c.289-.385.867-2.359.303-3.041zM9.647 8.633l3.947 4.748c.445.542 2.456.327 3.086-.193l-4.756-5.72c-.793.156-1.587.564-2.277 1.165zm7.308 5.045c-.609.46-1.9.735-2.931.527.074.823-.096 1.892-.616 2.745l1.885.712 1.528.564c.223-.378.542-.608.913-.764l-.35-1.692-.43-2.092z' fill='%230D425A'/%3E%3C/g%3E%3C/svg%3E");
}

.ya-share2__item_service_moimir .ya-share2__badge
{
    background-color: #168de2;
}

.ya-share2__item_service_moimir .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8.889 9.667a1.333 1.333 0 1 0 0-2.667 1.333 1.333 0 0 0 0 2.667zm6.222 0a1.333 1.333 0 1 0 0-2.667 1.333 1.333 0 0 0 0 2.667zm4.77 6.108l-1.802-3.028a.879.879 0 0 0-1.188-.307.843.843 0 0 0-.313 1.166l.214.36a6.71 6.71 0 0 1-4.795 1.996 6.711 6.711 0 0 1-4.792-1.992l.217-.364a.844.844 0 0 0-.313-1.166.878.878 0 0 0-1.189.307l-1.8 3.028a.844.844 0 0 0 .312 1.166.88.88 0 0 0 1.189-.307l.683-1.147a8.466 8.466 0 0 0 5.694 2.18 8.463 8.463 0 0 0 5.698-2.184l.685 1.151a.873.873 0 0 0 1.189.307.844.844 0 0 0 .312-1.166z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_odnoklassniki .ya-share2__badge
{
    background-color: #eb722e;
}

.ya-share2__item_service_odnoklassniki .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF' fill-rule='evenodd'%3E%3Cpath d='M11.674 6.536a1.69 1.69 0 0 0-1.688 1.688c0 .93.757 1.687 1.688 1.687a1.69 1.69 0 0 0 1.688-1.687 1.69 1.69 0 0 0-1.688-1.688zm0 5.763a4.08 4.08 0 0 1-4.076-4.075 4.08 4.08 0 0 1 4.076-4.077 4.08 4.08 0 0 1 4.077 4.077 4.08 4.08 0 0 1-4.077 4.075zM10.025 15.624a7.633 7.633 0 0 1-2.367-.98 1.194 1.194 0 0 1 1.272-2.022 5.175 5.175 0 0 0 5.489 0 1.194 1.194 0 1 1 1.272 2.022 7.647 7.647 0 0 1-2.367.98l2.279 2.28a1.194 1.194 0 0 1-1.69 1.688l-2.238-2.24-2.24 2.24a1.193 1.193 0 1 1-1.689-1.689l2.279-2.279'/%3E%3C/g%3E%3C/svg%3E");
}

.ya-share2__item_service_pinterest .ya-share2__badge
{
    background-color: #c20724;
}

.ya-share2__item_service_pinterest .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M6 9.742c0 1.58.599 2.986 1.884 3.51.21.087.4.003.46-.23.043-.16.144-.568.189-.738.06-.23.037-.31-.133-.512-.37-.436-.608-1.001-.608-1.802 0-2.322 1.74-4.402 4.53-4.402 2.471 0 3.829 1.508 3.829 3.522 0 2.65-1.174 4.887-2.917 4.887-.963 0-1.683-.795-1.452-1.77.276-1.165.812-2.421.812-3.262 0-.752-.405-1.38-1.24-1.38-.985 0-1.775 1.017-1.775 2.38 0 .867.293 1.454.293 1.454L8.69 16.406c-.352 1.487-.053 3.309-.028 3.492.015.11.155.136.22.054.09-.119 1.262-1.564 1.66-3.008.113-.409.647-2.526.647-2.526.32.61 1.254 1.145 2.248 1.145 2.957 0 4.964-2.693 4.964-6.298C18.4 6.539 16.089 4 12.576 4 8.204 4 6 7.13 6 9.742z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_pocket .ya-share2__badge
{
    background-color: #ee4056;
}

.ya-share2__item_service_pocket .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.9 5c1.159 0 2.1.948 2.1 2.117v5.862c0 .108-.008.215-.024.32.016.156.024.314.024.473 0 3.36-3.582 6.085-8 6.085s-8-2.724-8-6.085c0-.159.008-.317.024-.473a2.148 2.148 0 0 1-.024-.32V7.117C4 5.948 4.94 5 6.1 5h11.8zM8.596 9.392L12 12.795l3.404-3.403a1.063 1.063 0 0 1 1.502 1.502l-4.132 4.131c-.21.21-.486.314-.76.311-.284.01-.571-.094-.788-.31l-4.132-4.132a1.063 1.063 0 0 1 1.502-1.502z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_qzone .ya-share2__badge
{
    background-color: #f5b53c;
}

.ya-share2__item_service_qzone .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.367 14.463s-.105.148-.457.299l-.553.222.597 3.273c.062.282.25.983-.082 1.062-.17.04-.307-.067-.395-.121l-.769-.445-2.675-1.545c-.204-.122-.78-.546-1.093-.489-.205.038-.336.127-.483.216l-.77.445-2.39 1.386-.883.508c-.123.06-.301.058-.394-.025-.07-.063-.09-.253-.063-.388l.19-1.004.572-3.02c.047-.2.237-.975.166-1.137-.048-.107-.173-.196-.261-.267l-.61-.565-2.13-1.983c-.189-.153-.345-.345-.533-.496l-.235-.216c-.062-.078-.165-.235-.09-.369.142-.248.974-.218 1.335-.28l2.682-.31.82-.09c.146-.024.299-.004.413-.063.239-.123.51-.809.636-1.087l1.31-2.714c.151-.297.286-.603.431-.896.075-.15.133-.308.305-.356.162-.045.257.105.312.178.177.235.325.685.451.973l1.29 2.853c.104.238.363.964.54 1.074.266.166.858.108 1.227.172l2.841.292c.355.062 1.245.01 1.36.267.076.17-.072.314-.152.394l-.864.814-1.983 1.868c-.185.164-.77.637-.833.858-.04.14.02.414.088.722-.096-.001-.39-.007-1.182-.029-.63-.007-2.616-.17-2.713-.178l-.84-.076c-.14-.023-.326.012-.4-.076v-.02c1.727-1.168 3.407-2.416 5.142-3.578l-.006-.044c-.146-.072-.359-.059-.54-.095-.385-.077-.79-.078-1.208-.147-.75-.124-1.59-.114-2.434-.114-1.172 0-2.329.03-3.35.21-.45.079-.894.095-1.309.197-.172.042-.358.03-.49.108l.007.012c.1.027.253.02.381.02l.928.019.808.025.813.032.591.032c.486.075 1.007.036 1.475.114.404.068.804.065 1.182.14.113.022.245.015.33.064v.006c-.039.094-.336.255-.432.318l-1.055.743-2.256 1.62-1.417.992c.003.048.024.035.045.061 1.15.167 2.52.258 3.77.262 1.298.005 2.465-.094 3.118-.193.561-.086 1.082-.147 1.653-.287.325-.08.521-.148.521-.148z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_reddit .ya-share2__badge
{
    background-color: #ff4500;
}

.ya-share2__item_service_reddit .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16.542 10.63c-1.105-.636-2.494-1.033-4.025-1.118l.808-2.393 2.182.637c0 .963.78 1.742 1.743 1.742.964 0 1.758-.779 1.758-1.742C19.008 6.78 18.214 6 17.25 6c-.609 0-1.148.326-1.459.793l-2.65-.764a.482.482 0 0 0-.61.311l-1.063 3.172c-1.516.085-2.905.482-4.01 1.119a1.987 1.987 0 0 0-1.46-.623A1.995 1.995 0 0 0 4 12.004c0 .75.425 1.403 1.035 1.742-.029.17-.043.34-.043.51 0 2.62 3.146 4.744 7.015 4.744 3.855 0 7-2.124 7-4.744 0-.17-.013-.34-.042-.51A1.974 1.974 0 0 0 20 12.004a1.995 1.995 0 0 0-1.998-1.996c-.581 0-1.091.24-1.46.623zM9.499 12.5a1.01 1.01 0 0 1 1.006 1.006.998.998 0 0 1-1.006.991.986.986 0 0 1-.992-.991c0-.553.439-1.006.992-1.006zm5.002 0a.998.998 0 0 0-.992 1.006c0 .552.44.991.992.991a.998.998 0 0 0 1.006-.991 1.01 1.01 0 0 0-1.006-1.006zm-5.3 3.597a.484.484 0 0 1-.085-.694c.156-.226.482-.255.694-.085.567.44 1.474.68 2.197.68.709 0 1.616-.24 2.197-.68a.484.484 0 0 1 .694.085.496.496 0 0 1-.085.694c-.737.58-1.885.907-2.806.907-.935 0-2.07-.326-2.806-.907zm8.05-7.59c-.411 0-.752-.34-.752-.75 0-.426.34-.752.751-.752s.752.326.752.751c0 .41-.34.75-.752.75z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_renren .ya-share2__badge
{
    background-color: #1760a7;
}

.ya-share2__item_service_renren .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.019 15.562l-.001-.003-.018.002a.055.055 0 0 0 .019.001zM7.71 12.398l.146-.68c.048-.205.03-.452.03-.692V9.812L7.88 8c-.139 0-.278.043-.393.076-.358.102-.666.201-.962.352-1.158.59-2.022 1.565-2.387 2.944-.343 1.297-.007 2.652.522 3.507.118.19.269.48.44.61.135-.02.272-.15.375-.217a6.06 6.06 0 0 0 .622-.452l.24-.229c.63-.506 1.075-1.346 1.373-2.193zm4.276 3.164h.02a.382.382 0 0 0-.019-.003v.003zm-3.01-.888l-.258-.575-.088-.264H8.62l-.264.498c-.176.288-.358.574-.557.839a6.5 6.5 0 0 1-.85.944l-.517.422.012.024.287.14c.206.091.43.173.657.235.788.217 1.811.177 2.545-.053.178-.055.643-.194.739-.305v-.017c-.177-.092-.324-.254-.47-.381a5.573 5.573 0 0 1-1.225-1.507zm10.884-3.302c-.365-1.379-1.23-2.354-2.387-2.944-.296-.15-.604-.25-.962-.352-.115-.033-.254-.077-.393-.076l-.005 1.812v1.214c0 .24-.019.487.029.692l.147.68c.297.847.741 1.687 1.372 2.193l.24.23c.196.164.402.309.622.45.103.067.24.198.375.218.171-.13.322-.42.44-.61.529-.855.865-2.21.522-3.507zm-3.66 3.8c-.2-.265-.381-.55-.557-.839l-.264-.498h-.011l-.088.264-.258.575a5.576 5.576 0 0 1-1.226 1.507c-.145.127-.292.29-.469.38v.018c.096.111.561.25.739.305.734.23 1.757.27 2.545.053a4.85 4.85 0 0 0 .657-.234l.287-.141a1.31 1.31 0 0 0 .012-.024l-.516-.422a6.5 6.5 0 0 1-.85-.944zm-1.653-2.727c.068-.192.097-.402.146-.61.05-.21.024-.484.024-.727V9.753l-.006-1.741c-.015-.008-.02-.01-.047-.012-.197.047-.326.05-.592.14-.357.102-.685.275-.985.44-.289.16-.53.388-.78.587-.097.077-.199.19-.308.312l.01.01a1.19 1.19 0 0 0-.01.012l.36.47c.232.359.445.763.581 1.213.326 1.079.182 2.411-.235 3.273a4.9 4.9 0 0 1-.445.75l-.258.323a.018.018 0 0 1-.003.007c.004.007.01.016.012.022h.008c.395-.215.686-.574 1.027-.844.189-.15.354-.35.504-.54.404-.514.755-1.046.997-1.73zm-2.55 3.085l-.259-.323a4.903 4.903 0 0 1-.445-.75c-.417-.862-.561-2.194-.235-3.273.136-.45.35-.854.58-1.214L12 9.501l-.01-.011.01-.01a2.791 2.791 0 0 0-.308-.313c-.25-.2-.491-.427-.78-.586-.3-.166-.628-.339-.985-.44-.266-.09-.395-.094-.592-.141-.026.001-.032.004-.047.012l-.006 1.741v1.355c0 .243-.026.517.024.727.049.208.078.418.146.61.242.684.593 1.216.997 1.73.15.19.315.39.505.54.34.27.63.629 1.026.844h.008c.001-.006.008-.015.012-.022a.019.019 0 0 1-.003-.007z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_sinaWeibo .ya-share2__badge
{
    background-color: #c53220;
}

.ya-share2__item_service_sinaWeibo .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Ctitle%3EsinaWeibo%3C/title%3E%3Cpath d='M10.266 14.696c-.103.421.55.447.64.063.037-.191-.103-.332-.282-.332-.167 0-.333.128-.358.269zm-.128.945c.102-.498-.307-.869-.793-.843-.46.038-.843.358-.92.754-.115.511.307.882.793.844.46-.026.843-.345.92-.755zm3.797-3.157c-1.586-.997-3.707-1.01-5.42-.447-.857.28-1.764.818-2.301 1.495-.627.793-.882 1.815-.23 2.8.958 1.431 3.413 2.033 5.675 1.508 1.33-.307 2.749-1.048 3.35-2.326.562-1.177-.052-2.378-1.074-3.03zm-3.17.498c.945.167 1.7.755 1.827 1.739.243 1.854-2.173 3.336-4.026 2.327a1.933 1.933 0 0 1-.742-2.723c.435-.767 1.266-1.266 2.148-1.355a2.75 2.75 0 0 1 .793.012zm6.11-.37c-.268-.18-.538-.281-.856-.383-.308-.103-.359-.154-.243-.46.076-.218.14-.41.166-.666.14-1.15-.793-1.495-1.854-1.406-.498.039-.92.167-1.355.307-.281.09-.806.384-.92.205-.064-.09.013-.23.038-.32.166-.626.23-1.496-.384-1.88-.447-.28-1.227-.204-1.7-.038-2.556.87-6.455 4.552-5.663 7.479.18.664.55 1.163.908 1.521 1.061 1.061 2.71 1.65 4.231 1.866 1.112.154 2.263.14 3.375-.064 1.815-.332 3.554-1.15 4.679-2.607.754-.972.997-2.352 0-3.235a3.334 3.334 0 0 0-.422-.319zm1.623-3.682c.652 1.483-.064 2.148.166 2.66.192.421.767.46 1.023.14.191-.243.294-.959.307-1.278a4.193 4.193 0 0 0-1.125-3.12c-.984-1.073-2.276-1.444-3.694-1.303-.256.025-.46.064-.601.217-.332.358-.166.882.294.959.384.063 1.342-.23 2.416.396.498.307.971.792 1.214 1.33zm-3.45-.562c-.282.345-.078.87.408.856.294-.012.358-.05.677.051.307.103.626.448.64.857.025.268-.282.895.32 1.061a.523.523 0 0 0 .536-.166c.115-.128.166-.371.192-.575.089-.857-.333-1.598-1.01-2.02-.384-.23-1.445-.46-1.764-.064z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_skype .ya-share2__badge
{
    background-color: #00aff0;
}

.ya-share2__item_service_skype .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M19.537 13.698c.115-.52.176-1.06.176-1.614 0-4.155-3.415-7.524-7.63-7.524-.444 0-.88.038-1.304.11A4.444 4.444 0 0 0 8.425 4C5.981 4 4 5.954 4 8.364c0 .805.222 1.56.608 2.207a7.428 7.428 0 0 0-.155 1.513c0 4.156 3.416 7.4 7.63 7.4.477 0 .944-.044 1.397-.126.623.33 1.335.642 2.092.642 2.444 0 4.425-1.953 4.425-4.364 0-.695-.166-1.354-.46-1.938zm-3.974 1.457c-.294.418-.725.747-1.293.984-.567.238-1.239.356-2.016.356-.933 0-1.702-.162-2.308-.486a2.986 2.986 0 0 1-1.047-.934c-.268-.39-.403-.768-.403-1.137 0-.213.08-.395.242-.547a.855.855 0 0 1 .615-.229c.202 0 .373.059.512.178.14.119.26.294.358.527.12.278.25.51.39.695.139.185.336.34.589.46.254.12.587.18 1 .18.566 0 1.027-.12 1.382-.364.354-.243.532-.547.532-.91a.919.919 0 0 0-.287-.702 1.88 1.88 0 0 0-.741-.412 13.21 13.21 0 0 0-1.216-.303c-.678-.146-1.247-.318-1.703-.513-.458-.196-.822-.463-1.09-.8-.269-.34-.403-.759-.403-1.26 0-.48.142-.904.426-1.275.283-.372.693-.658 1.23-.858.537-.2 1.17-.299 1.895-.299.58 0 1.082.066 1.505.198.423.133.774.309 1.053.528.28.22.484.45.612.691.13.24.194.477.194.705 0 .21-.08.4-.241.567a.8.8 0 0 1-.603.252c-.22 0-.386-.05-.5-.151-.114-.101-.237-.266-.37-.495a2.27 2.27 0 0 0-.618-.768c-.241-.184-.627-.276-1.16-.276-.494 0-.893.1-1.196.3-.303.199-.455.44-.455.72 0 .173.053.324.155.45.103.128.245.235.426.326.18.091.363.162.547.214.185.052.49.126.916.225a15.47 15.47 0 0 1 1.446.38c.432.138.8.307 1.103.503.302.198.54.45.709.752.17.302.255.673.255 1.111 0 .525-.148.998-.442 1.417z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_surfingbird .ya-share2__badge
{
    background-color: #30baff;
}

.ya-share2__item_service_surfingbird .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.315 8.49l-.214 1.987-3.436 3.382h-1.826l-.698 1.826v2.523l-2.47-.698 2.846-5.1L4 8.167l5.638.752L6.899 5l7.463 4.027 2.202-2.47h1.02L20 7.631z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_telegram .ya-share2__badge
{
    background-color: #64a9dc;
}

.ya-share2__item_service_telegram .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.92 6.089L4.747 11.555c-.967.388-.962.928-.176 1.168l3.534 1.104 1.353 4.146c.164.454.083.634.56.634.368 0 .53-.168.736-.368.13-.127.903-.88 1.767-1.719l3.677 2.717c.676.373 1.165.18 1.333-.628l2.414-11.374c.247-.99-.378-1.44-1.025-1.146zM8.66 13.573l7.967-5.026c.398-.242.763-.112.463.154l-6.822 6.155-.265 2.833-1.343-4.116z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_tencentWeibo .ya-share2__badge
{
    background-color: #53a9d7;
}

.ya-share2__item_service_tencentWeibo .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8.813 6.01a4.397 4.397 0 0 0-4.326 6.121c.087.199.312.29.511.2a.382.382 0 0 0 .206-.51 3.566 3.566 0 0 1-.286-1.668A3.616 3.616 0 0 1 8.76 6.79a3.615 3.615 0 0 1 3.366 3.84 3.615 3.615 0 0 1-4.65 3.218.39.39 0 0 0-.486.263.394.394 0 0 0 .262.485c.315.093.647.152.977.174a4.397 4.397 0 0 0 4.677-4.087A4.398 4.398 0 0 0 8.813 6.01zm-1.348 5.658a1.67 1.67 0 1 0-.46-.655c-.274.27-.565.59-.854.966-1.022 1.315-2.224 3.694-2.148 7.007.006.204.157.484.355.497l.04.002c.213.015.394-.301.391-.516-.064-2.458.6-4.662 1.955-6.423.242-.316.488-.626.72-.878zm12.388 4.106c-1.307-.48-2.302-1.27-2.95-2.352a4.873 4.873 0 0 1-.354-.71.819.819 0 0 0 .337-.36.829.829 0 0 0-.395-1.098.822.822 0 0 0-1.098.392.822.822 0 0 0 .724 1.177c.091.237.218.516.39.81.483.812 1.431 1.912 3.196 2.558a.226.226 0 0 0 .278-.113c0-.006.005-.01.007-.022a.224.224 0 0 0-.135-.282zm-3.767-1.676a2.04 2.04 0 0 1-1.707-3.042 2.039 2.039 0 0 1 2.784-.787 2.04 2.04 0 0 1 .786 2.783 1.92 1.92 0 0 1-.268.378.223.223 0 0 0 .014.314c.09.082.234.074.313-.016a2.489 2.489 0 1 0-4.017-2.89 2.493 2.493 0 0 0 2.08 3.708.224.224 0 0 0 .015-.448z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_tumblr .ya-share2__badge
{
    background-color: #547093;
}

.ya-share2__item_service_tumblr .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.72 7.7h3.699v2.857h-3.7v4.102c0 .928-.01 1.463.087 1.726.098.262.343.534.61.69.355.213.758.32 1.214.32.81 0 1.616-.264 2.417-.79v2.522c-.683.322-1.302.55-1.857.678a7.94 7.94 0 0 1-1.798.195 4.905 4.905 0 0 1-1.724-.276 4.215 4.215 0 0 1-1.438-.79c-.399-.343-.673-.706-.826-1.09-.154-.386-.23-.945-.23-1.676v-5.611H7V8.29c.628-.203 1.357-.496 1.804-.877.45-.382.809-.84 1.08-1.374.272-.534.459-1.214.56-2.039h2.276v3.7z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_twitter .ya-share2__badge
{
    background-color: #00aced;
}

.ya-share2__item_service_twitter .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 7.539a6.56 6.56 0 0 1-1.885.517 3.294 3.294 0 0 0 1.443-1.816 6.575 6.575 0 0 1-2.085.796 3.283 3.283 0 0 0-5.593 2.994A9.32 9.32 0 0 1 5.114 6.6a3.28 3.28 0 0 0 1.016 4.382 3.274 3.274 0 0 1-1.487-.41v.041a3.285 3.285 0 0 0 2.633 3.218 3.305 3.305 0 0 1-1.482.056 3.286 3.286 0 0 0 3.066 2.28A6.585 6.585 0 0 1 4 17.524 9.291 9.291 0 0 0 9.032 19c6.038 0 9.34-5 9.34-9.337 0-.143-.004-.285-.01-.425A6.672 6.672 0 0 0 20 7.538z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_viber .ya-share2__badge
{
    background-color: #7b519d;
}

.ya-share2__item_service_viber .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF' fill-rule='evenodd'%3E%3Cpath d='M18.434 15.574c-.484-.391-1.002-.743-1.511-1.102-1.016-.718-1.945-.773-2.703.38-.426.648-1.021.677-1.644.392-1.718-.782-3.044-1.989-3.821-3.743-.344-.777-.34-1.473.465-2.022.425-.29.854-.634.82-1.268-.045-.828-2.043-3.593-2.832-3.885a1.429 1.429 0 0 0-.984 0C4.373 4.95 3.606 6.48 4.34 8.292c2.19 5.405 6.043 9.167 11.349 11.463.302.13.638.183.808.23 1.208.012 2.623-1.158 3.032-2.318.393-1.117-.438-1.56-1.096-2.093zM12.485 4.88c3.879.6 5.668 2.454 6.162 6.38.045.363-.09.909.426.919.538.01.408-.528.413-.89.045-3.699-3.163-7.127-6.888-7.253-.281.04-.863-.195-.9.438-.024.427.466.357.787.406z'/%3E%3Cpath d='M13.244 5.957c-.373-.045-.865-.222-.953.299-.09.546.458.49.811.57 2.395.538 3.23 1.414 3.624 3.802.057.349-.057.89.532.8.436-.066.278-.53.315-.802.02-2.293-1.936-4.38-4.329-4.669z'/%3E%3Cpath d='M13.464 7.832c-.249.006-.493.033-.585.3-.137.4.152.496.446.544.983.158 1.5.74 1.598 1.725.027.268.195.484.452.454.356-.043.389-.361.378-.664.017-1.106-1.227-2.385-2.289-2.359z'/%3E%3C/g%3E%3C/svg%3E");
}

.ya-share2__item_service_vkontakte .ya-share2__badge
{
    background-color: #48729e;
}

.ya-share2__item_service_vkontakte .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.785 16.241s.288-.032.436-.194c.136-.148.132-.427.132-.427s-.02-1.304.576-1.496c.588-.19 1.341 1.26 2.14 1.818.605.422 1.064.33 1.064.33l2.137-.03s1.117-.071.587-.964c-.043-.073-.308-.661-1.588-1.87-1.34-1.264-1.16-1.059.453-3.246.983-1.332 1.376-2.145 1.253-2.493-.117-.332-.84-.244-.84-.244l-2.406.015s-.178-.025-.31.056c-.13.079-.212.262-.212.262s-.382 1.03-.89 1.907c-1.07 1.85-1.499 1.948-1.674 1.832-.407-.267-.305-1.075-.305-1.648 0-1.793.267-2.54-.521-2.733-.262-.065-.454-.107-1.123-.114-.858-.009-1.585.003-1.996.208-.274.136-.485.44-.356.457.159.022.519.099.71.363.246.341.237 1.107.237 1.107s.142 2.11-.33 2.371c-.325.18-.77-.187-1.725-1.865-.489-.859-.859-1.81-.859-1.81s-.07-.176-.198-.272c-.154-.115-.37-.151-.37-.151l-2.286.015s-.343.01-.469.161C3.94 7.721 4.043 8 4.043 8s1.79 4.258 3.817 6.403c1.858 1.967 3.968 1.838 3.968 1.838h.957z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.ya-share2__item_service_whatsapp .ya-share2__badge
{
    background-color: #65bc54;
}

.ya-share2__item_service_whatsapp .ya-share2__icon
{
    background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 11.794c0 4.304-3.517 7.794-7.855 7.794a7.87 7.87 0 0 1-3.796-.97L4 20l1.418-4.182a7.714 7.714 0 0 1-1.127-4.024C4.29 7.489 7.807 4 12.145 4S20 7.49 20 11.794zm-7.855-6.553c-3.641 0-6.603 2.94-6.603 6.553 0 1.434.467 2.762 1.258 3.842l-.825 2.433 2.537-.806a6.6 6.6 0 0 0 3.633 1.084c3.642 0 6.604-2.94 6.604-6.553s-2.962-6.553-6.604-6.553zm3.967 8.348c-.049-.08-.177-.128-.37-.223-.192-.095-1.139-.558-1.315-.621-.177-.064-.305-.096-.434.095a10.92 10.92 0 0 1-.61.749c-.112.128-.224.143-.416.048-.193-.096-.813-.297-1.549-.948a5.76 5.76 0 0 1-1.07-1.323c-.113-.191-.013-.295.084-.39.086-.086.192-.223.289-.334.096-.112.128-.191.192-.319s.032-.239-.016-.335c-.048-.095-.433-1.035-.594-1.418-.16-.382-.32-.318-.433-.318-.112 0-.24-.016-.369-.016a.71.71 0 0 0-.513.239c-.177.19-.674.653-.674 1.593s.69 1.848.786 1.976c.096.127 1.332 2.119 3.289 2.884 1.958.764 1.958.51 2.31.477.353-.031 1.14-.461 1.3-.908.16-.446.16-.829.113-.908z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
}
</style>
<script type="text/javascript" src="/js/plugins.js"></script>
<!--<script type="text/javascript" src="js/main.js"></script>-->

<!--Поиск в каталоге предприятий-->
<script type="text/javascript" src="/js/jquery.combobox.js"></script>
<script type="text/javascript" src="/js/jquery.rating.js" charset="UTF-8"></script>
<!--Поиск в каталоге предприятий-->

<!--Скрипт закладок для новостей от Инфорос-->
<script type="text/javascript" src="/js/tab_function.js"></script>
<!--Скрипт закладок для новостей от Инфорос-->

<!--Скрипт кнопки Наверх-->
<script type="text/javascript" src="/js/to_top.js"></script>
<!--Скрипт кнопки Наверх--->


</head>

<body>
<?php $this->beginBody() ?>


<!--Authorisation Pop Up-->
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
												<input class="form_control" type="text" name="username" placeholder="E-mail или логин" required="" value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" autocomplete="off">
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
												
												<input class="form_control" id="password" type="password" name="password" placeholder="Пароль" spellcheck="false" maxlength="20" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" autocomplete="off">
												<!--
												<input class="form_control" id="password" type="text" name="password" placeholder="Пароль" spellcheck="false" maxlength="20" required>
												-->
												</div>
												<!--Password-->
													
													
													
													
													<!--reCCAPTCHA-->
													<div class="form_item">
													<div id="g-recaptcha" data-onloadcallbackname="onloadCallback" data-verifycallbackname="verifyCallback">
													<img src="img/captcha.jpg" height="60px">
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


<!--Меню-->
<!--Layout 768px-->
<div class="mobile" style="display: none;"> 
  <!--Background-->
  <div class="back_dark"></div>
  <!--Background-->
  
  
  

  <div class="header_mobile_menu_list wrap_left wrap_main">
  <div class="button_right"><a title="Закрыть меню" href="#"><img src="img/Icon_arrow_right.svg" alt="Закрыть меню"></a></div>
    <ul>
      <li><a href="index_news_list.html">Новости</a></li>
			<li><a href="index_about.html">О газете</a></li>
			<li><a href="index_subscribe.html">Подписка</a></li>
			<li><a href="index_archive.html">Архив номеров</a></li>
			<li><a href="index_catalog_list.html">Каталог</a></li>
			<li><a href="index_article.html">Контакты</a></li>
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
<!--Layout 768px-->
<!--Меню-->




<!--Поиск-->
<!--Layout 320px-->
<div class="mobile" style="display:none;"> 
  <!--Background-->
  <div class="back_dark"></div>
  <!--Background-->
  
  
  

  <div class="header_mobile_search">
  <div class="button_left"><a title="Закрыть поиск" href="#"><img src="img/Icon_arrow_left.svg" alt="Закрыть поиск"></a></div>
        <!--Поиск-->
        <div class="search_mobile">
          <form action="" method="get">
            <input type="hidden" name="module" value="search">
            <input type="text" name="query" class="search_text" placeholder="поиск по сайту">
            <input type="submit" value="" class="search_image">
          </form>
        </div>
        <!--Поиск-->
  </div>
</div>
<!--Layout 320px-->
<!--Поиск-->




<!--Рекламное место 01 баннер 980x90-->
  <div class="banner" style="display:none;">
  <div class="banner_placement top">
    <div id="banner_1" class="banner_content banner_980_90">
    <img src="img/banner_980_90.jpg" alt="Рекламный баннер 980x90 px 01"> <span>Рекламный баннер 980x90 px 01</span>
    </div>
  </div>  
  </div>
<!--Рекламное место 01 баннер 980x90-->




<!--Header-->
<header>
  <!--Полоса авторизации, погоды, соцсетей, rss, почта-->
  <div class="top_header">
      <div class="rate_top">
        
        <!--Архив-->
        <div class="archive">
        <form id="myform" action="?module=number&amp;action=list" method="post">
              <div class="archive-head">Архив</div>
							
							<div class="archive-body">
								<select id="nom_year" data-placeholder="год" class="chosen chzn-done" style="display: none;">
									<option value="0"></option>
									{ARHIVE_YEARS}
								</select>
									
									<div id="nom_year_chzn" class="chzn-container chzn-container-single" style="width: 80px;">
										<a href="javascript:void(0)" class="chzn-single chzn-default" tabindex="-1">
											<span>год</span>
											<div><b></b></div>
										</a>
									
										<div class="chzn-drop" style="left: -9000px; width: 78px; top: 24px;">
											<div class="chzn-search">
											<input type="text" autocomplete="off" style="width: 43px;">
											</div>
											<ul class="chzn-results">
												<li id="nom_year_chzn_o_1" class="active-result" style="">2018</li>
												<li id="nom_year_chzn_o_2" class="active-result" style="">2017</li>
											</ul>
										</div>
									</div>
								
								
								<select id="number" data-placeholder="номер" class="chosen chzn-done" style="display: none;">
									<option value="0"></option>
									<option class="y2018 h" value="305">№49</option>
									<option class="y2018 h" value="304">№48</option>
									<option class="y2017 h" value="303">№47</option>
									<option class="y2017 h" value="302">№46</option>
									<option class="y2017 h" value="301">№45</option>
									<option class="y2017 h" value="300">№44</option>
									<option class="y2017 h" value="299">№43</option>
									<option class="y2017 h" value="298">№42</option>
									<option class="y2017 h" value="297">№41</option>
								</select>
								
								<div id="number_chzn" class="chzn-container chzn-container-single" style="width: 80px;">
									<a href="javascript:void(0)" class="chzn-single chzn-default" tabindex="-1">
									<span>номер</span>
									<div><b></b></div>
									</a>
									
									<div class="chzn-drop" style="left: -9000px; width: 78px; top: 25px;">
										<div class="chzn-search">
										<input type="text" autocomplete="off" style="width: 43px;">
										</div>
									
										<ul class="chzn-results">
											<li id="number_chzn_o_1" class="active-result y2018 h" style="">№49</li>
											<li id="number_chzn_o_2" class="active-result y2018 h" style="">№48</li>
											<li id="number_chzn_o_3" class="active-result y2017 h" style="">№47</li>
											<li id="number_chzn_o_4" class="active-result y2017 h" style="">№46</li>
											<li id="number_chzn_o_5" class="active-result y2017 h" style="">№45</li>
											<li id="number_chzn_o_6" class="active-result y2017 h" style="">№44</li>
											<li id="number_chzn_o_7" class="active-result y2017 h" style="">№43</li>
											<li id="number_chzn_o_8" class="active-result y2017 h" style="">№42</li>
											<li id="number_chzn_o_9" class="active-result y2017 h" style="">№41</li>
										</ul>
									</div>
								</div>
							</div>
							
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
            <a href="/users/user_0292837/" class="auth_represent_item user_name" data-sign="signin">
            <i class="icon user_pic" style="background-image:url(/media/admin/image_user_avatar_01.jpg);"></i>Константин Костантинович Константиновский
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
            <input type="text" name="query" class="search_text" placeholder="поиск по сайту">
            <input type="submit" value="" class="search_image">
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
  <div class="banner_placement top">
    <div id="banner_2" class="banner_content banner_980_60">
    <img src="/img/banner_980_60.jpg" alt="Рекламный баннер 980x60 px 02"> <span>Рекламный баннер 980x60 px 02</span>
    </div>
  </div>  
  </div>
  <!--Рекламное место 01 баннер 980x60-->


  <!-------------------------Мобильная версия статей на странице------------------------------->
  
  <!--Средняя колонка для мобильной 768px-->
  <div class="middle_mobile">
		<div class="middle_collumn">
			<article class="sys_middle_collumn">
						
						
						
						
						<!--О нас, Статья, Новости, Архив, Результаты поиска-->
						<div class="top_main_middle">
              
              <article>
              
              <!-------------------------------------О нас------------------------------------------->
              
              <!--О нас-->
              <div class="article_details" style=" display:none;">
              
              	
                
                <!--Name-->
                <div class="article_name">
                  <h1>О нашей газете</h1>
                </div>
                <!--Name-->
                
                
                <!--Subname-->
                <div class="article_subname">Чуйские известия - еженедельная общественно-политическая газета, выходит с 1991 года.</div>
                <!--Subname-->
                
                
                <!--Image-->
                <div class="atricle_img">
                <img src="media/DS_94L.jpg" alt="О нашей газете" class="img3" style="">
                </div>
                <!--Image-->
                
                
                <div class="article_text">
                  
                
                 <p> 
                  </p><div class="item_image">
                    <span class="image" style="background-image:url(media/10.jpg);"><img src="img/empty_sq.png"></span>
                  </div>
                  Антонина Михайловна Блиндина – главный редактор. Окончила факультет журналистики Иркутского государственного университета. Заслуженный деятель культуры Кыргызской Республики, награждена Почетной грамотой Кыргызской Республики, Почетным знаком «Кеменгер» за особые заслуги, юбилейной медалью «20 лет независимости Республики Казахстан», Почетными грамотами Чуйской областной госадминистрации. Она член Общественной палаты интеллигенции Кыргызской Республики, вице-президент Ассоциации издателей и распространителей печатных изданий Кыргызской Республики. Лауреат международных и правительственных журналистских конкурсов.<p></p>
                  
                  
                  <p>
                  </p><div class="item_image">
                    <span class="image" style="background-image:url(media/22.jpg);"><img src="img/empty_sq.png"></span>
                  </div>
                  Александр Викторович Никсдорф, окончил Фрунзенский политехнический институт. Сын известного журналиста Виктора Куртовича Никсдорфа. Работает заместителем главного редактора, лауреат республиканского творческого конкурса, проводимого правительством КР. Победитель областного конкурса «Сары-Єзєн», проводимого Чуйской областной госадминистрацией. Победитель республиканского конкурса на лучшую журналистскую работу, проводимого фондом «Сорос-Кыргызстан» и Центром ОБСЕ в Бишкеке. Обладатель диплома за I место в республиканском конкурсе «Средства массовой информации об экономике Кыргызстана», проводимого Бишкекским деловым клубом. Победитель республиканского конкурса на лучший материал СМИ по теме «Права на землю в Кыргызстане».<p></p>
                  
                  
                  
                  <p>
                  </p><div class="item_image">
                    <span class="image" style="background-image:url(media/4.jpg);"><img src="img/empty_sq.png"></span>
                  </div>
                  Арзыгуль Рыскельдиевна Соколова, окончила столичный вуз, образование филологическое, русовед, имеет высшую категорию, награждена Почетной грамотой Чуйской областной госадминистрации.<br><br>

                  Коммуникабельная, начитанная. Ответственный секретарь газеты. Ее любимое выражение: «Корреспонденты, вы приносите мне статьи – алмазы, а я их шлифую и делаю из них бриллианты». И это действительно так.<p></p>
                  
                
                
                </div>
              
              
              
              
              </div>
              <!--О нас-->
              
              <!-------------------------------------О нас------------------------------------------->
              
              
              
              
              <!-------------------------------------Статья подробно------------------------------------------->
              
              <!--Статья-->
              <div class="article_details" style="display:none;">
              
              	
                <div class="article_header">
                <!--Название рубрики-->
                <div id="ulrubrics" class="article_rubrics">
                  <a href="?module=articles&amp;action=list&amp;rubrics=19&amp;id=0"><h3>Спорт</h3></a>
                </div>
                <!--Название рубрики-->
                
                
                <!--Номер выпуска-->
                <div id="ulissues" class="article_issues">
                   <a href="?module=articles&amp;action=list&amp;issues=28&amp;id=0">Выпуск №3</a>
                </div>
                <!--Номер выпуска-->
                </div>
                
                
                
                
                
                <!--Name-->
                <div class="article_name">
                  <h1>Областная сетевая акция «Мы – будущее региона»</h1>
                </div>
                <!--Name-->
                
                
                <!--Subname-->
                <div class="article_subname">Областная сетевая акция «Мы – будущее региона» проведена в нашем городе</div>
                <!--Subname-->
                
                
                <!--Дата публикации-->
                <div class="article_date">
                    <time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time>
                </div>
                <!--Дата публикации-->
                
                
                <!--Статистика-->
                <div class="stat">
                  <!--Просмотры-->
                  <div class="view">
                    <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                    <div class="content wrap_right">896</div>
                  </div>
                  <!--Просмотры-->
                  
                  <!--Комментарии-->
                  <div class="comment">
                    <a itemprop="discussionUrl" href="?comments=1">
                      <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                      <div class="content wrap_right">243</div>
                    </a>
                  </div>
                  <!--Комментарии-->
                  
                </div>
                <!--Статистика-->
                
                
                
                
                <!--Image-->
                <div class="atricle_img">
                <img src="media/DS_94L.jpg" alt="Областная сетевая акция «Мы – будущее региона" class="img3" style="">
                </div>
                <!--Image-->
                
                                
                <div class="article_intro">28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</div>
                
                <div class="article_text">
                  <p>Акция была посвящена 155-летию Амурской области. Ее цель - активизировать гражданскую позицию школьников и подростков в подготовке и проведении мероприятий, приуроченных к празднованию 155-летия Амурской области.<br>
                  </p><div class="item_image">
                    <span class="image" style="background-image:url(media/admin/image_user_pet_03.jpg);"><img src="img/empty_sq.png"></span>
                  </div>
                    В «День единых действий» с 13.00 до 16.00 дети рисовали красками на снегу «поздравительные открытки». Все открытки, которые выполнили ребята, нарисованы с использованием символики Приамурья и содержат поздравительное обращение. Темы обращений, оформление, способ изложения, литературные приемы ребята выбирали самостоятельно.<br>
                    <br>
                    По итогам проведения акции самые активные участники будут приглашены на областную профильную смену «Юный лидер», которая пройдет в мае 2013 года.<p></p>
                  <p><a href="http://www.obramur.ru/news">http://www.obramur.ru/news</a></p>
                </div>
                
                <div class="article_author">Константин Константинович Константиновский</div>
                
                <a href="http://www.obramur.ru/news" class="url">Какой-то урл</a>
                
                <div class="atricles_id_media">Какое-то АйДи медиа</div>
              
                
                <!--Поделиться в соцсетях-->
                <div class="atricle_share">
                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
  <script src="https://yastatic.net/share2/share.js"></script>
  <div class="ya-share2 ya-share2_inited" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""><div class="ya-share2__container ya-share2__container_size_m"><ul class="ya-share2__list ya-share2__list_direction_horizontal"><li class="ya-share2__item ya-share2__item_service_vkontakte"><a class="ya-share2__link" href="https://vk.com/share.php?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="ВКонтакте"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">ВКонтакте</span></a></li><li class="ya-share2__item ya-share2__item_service_facebook"><a class="ya-share2__link" href="https://www.facebook.com/sharer.php?src=sp&amp;u=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Facebook"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Facebook</span></a></li><li class="ya-share2__item ya-share2__item_service_odnoklassniki"><a class="ya-share2__link" href="https://connect.ok.ru/offer?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Одноклассники"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Одноклассники</span></a></li><li class="ya-share2__item ya-share2__item_service_moimir"><a class="ya-share2__link" href="https://connect.mail.ru/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Мой Мир"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Мой Мир</span></a></li><li class="ya-share2__item ya-share2__item_service_gplus"><a class="ya-share2__link" href="https://plus.google.com/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Google+"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Google+</span></a></li></ul><iframe class="ya-share2__iframe" src="https://yastatic.net/share2/frame.html?namespace=ya-share2.0.22124787369420051" style="border: 0; display: none; position: absolute; left: -9999px;"></iframe></div></div>
                
                <div id="print" class="atricle_print" style="cursor:pointer;"><img src="img/print.png" alt="Распечатать" width="25" height="25"></div>
                </div>
                <!--Поделиться в соцсетях-->
              
              
              
                <!--Комментарии к статье-->
                <footer>
                <div class="article_comments">
                  
                    <div id="commentsform" class="article_commentsform"> <a name="cp"></a>
                      <h3>Комментарии</h3>
                      <a name="cf"></a>
                      <div id="commtext"></div>
                      
                      <form id="commform">
                        <input type="hidden" name="namemod" id="namemodcomm" value="comm">
                        <input type="hidden" name="contid" id="contid" value="97">
                        
                        
                        <!--Авторизованный пользователь-->
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
                        <!--Авторизованный пользователь-->
                        
                        
                        <!--Text-->
                        <div id="commmessagediv" class="form_item">
                        <textarea name="message" rows="10" cols="50" placeholder="Напишите ваши мысли о публикации" id="commmessage"></textarea>
                        </div>
                        <!--Text-->
                        
                        <!--reCCAPTCHA-->
                        <div id="commcaptchadiv" class="form_item">
                        <div id="g-recaptcha" data-onloadcallbackname="onloadCallback" data-verifycallbackname="verifyCallback">
                        <img src="img/captcha.jpg" height="60px">
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
              <!--Статья-->
              
              
              
              <!--Похожие статьи-->
              <div id="more_articles" class="article_more" style=" display:none;">
              	<h3>Ещё по теме:</h3>
                
                <div class="article_more_item">
                  <!--Дата публикации-->
                  <div class="article_date">
                      <time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time>
                  </div>
                  <!--Дата публикации-->
                  
                  <!--Название публикации-->
                  <a href="?module=articles&amp;action=view&amp;id=2724">В Кыргызстане осталось ГСМ на две недели</a>
                  <!--Название публикации-->
                </div>
                
                <div class="article_more_item">
                  <!--Дата публикации-->
                  <div class="article_date">
                      <time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time>
                  </div>
                  <!--Дата публикации-->
                  
                  <!--Название публикации-->
                  <a href="?module=articles&amp;action=view&amp;id=2708">Просто ЧЕСТНОСТЬ И ПОПУЛИЗМ</a>
                  <!--Название публикации-->
                </div>
                
                <div class="article_more_item">
                  <!--Дата публикации-->
                  <div class="article_date">
                      <time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time>
                  </div>
                  <!--Дата публикации-->
                  
                  <!--Название публикации-->
                  <a href="?module=articles&amp;action=view&amp;id=2672">Портрет идеального президента:  6 преимуществ  Сооронбая Жээнбекова</a>
                  <!--Название публикации-->
                </div>
                
                <div class="article_more_item">
                  <!--Дата публикации-->
                  <div class="article_date">
                      <time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time>
                  </div>
                  <!--Дата публикации-->
                  
                  <!--Название публикации-->
                  <a href="?module=articles&amp;action=view&amp;id=2664">Выборы в Кыргызстане: Дискриминация админресурсом, или о чём говорил А. Атамбаев</a>
                  <!--Название публикации-->
                </div>
                
                <div class="article_more_item">
                  <!--Дата публикации-->
                  <div class="article_date">
                      <time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time>
                  </div>
                  <!--Дата публикации-->
                  
                  <!--Название публикации-->
                  <a href="?module=articles&amp;action=view&amp;id=2653">Президент Узбекистана Шавкат Мирзиеев прибыл с официальным визитом в Кыргызстан</a>
                  <!--Название публикации-->
                </div>
                
              </div>
              <!--Похожие статьи-->
              
              
              
              <!--Список статей в одной рубрике-->
              <div class="article_list" style="display:none;">
              	
                <div class="article_header">
                  <!--Название рубрики-->
                  <div id="ulrubrics" class="article_rubrics">
                    <a href="?module=articles&amp;action=list&amp;rubrics=19&amp;id=0"><h3>Спорт</h3></a>
                  </div>
                  <!--Название рубрики-->
                </div>
                
                
                <!--Статья 1-->
                <div class="article_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_03.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Статья 1-->
                
                
                
                
                <!--Статья 2-->
                <div class="article_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_02.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Статья 2-->
                
                
                
                <!--Статья 3-->
                <div class="article_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_01.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Статья 3-->
                
                
                
                
                <!--Статья 4-->
                <div class="article_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_05.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Статья 4-->
                
                
                
                <!--Статья 5-->
                <div class="article_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_04.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Статья 5-->
                              
              <!--Список статей в одной рубрике-->
              
              
              
              <!--Пагинация статей-->
              <div class="article_list_pages">
                  <div class="paginator"> 
                  <span>1</span> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">2</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=3">3</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=4">4</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=5">5</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=6">...</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">23</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">...</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">»»</a>
                  </div>
              </div>
              <!--Пагинация статей-->
            
            </div>
              <!--Список статей в одной рубрике-->
              
              <!-------------------------------------Статья подробно------------------------------------------->
              
              
              
              
              <!-------------------------------------Новость подробно------------------------------------------->
              
              <!--Новость-->
              <div class="article_details" style="">
              
              	
                <div class="article_header">
                <!--Название раздела-->
                <div id="ulrubrics" class="article_rubrics">
                  <a href="index_news_list.html"><h3>Новости</h3></a>
                </div>
                <!--Название раздела-->
                </div>
                
                
                
                
                
                <!--Name-->
                <div class="article_name">
                  <h1>Областная сетевая акция «Мы – будущее региона»</h1>
                </div>
                <!--Name-->
                
                
                <!--Subname-->
                <div class="article_subname" style="display:none;">Областная сетевая акция «Мы – будущее региона» проведена в нашем городе</div>
                <!--Subname-->
                
                
                <!--Дата публикации-->
                <div class="article_date">
                    <time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time>
                </div>
                <!--Дата публикации-->
                
                
                <!--Статистика-->
                <div class="stat">
                  <!--Просмотры-->
                  <div class="view">
                    <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                    <div class="content wrap_right">896</div>
                  </div>
                  <!--Просмотры-->
                  
                  <!--Комментарии-->
                  <div class="comment">
                    <a itemprop="discussionUrl" href="?comments=1">
                      <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                      <div class="content wrap_right">243</div>
                    </a>
                  </div>
                  <!--Комментарии-->
                  
                </div>
                <!--Статистика-->
                
                
                
                
                <!--Image-->
                <div class="atricle_img" style="display:none;">
                <img src="media/DS_94L.jpg" alt="Областная сетевая акция «Мы – будущее региона" class="img3" style="">
                </div>
                <!--Image-->
                
                                
                <div class="article_intro" style="display:none;">28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</div>
                
                <div class="article_text">
                  <p>Акция была посвящена 155-летию Амурской области. Ее цель - активизировать гражданскую позицию школьников и подростков в подготовке и проведении мероприятий, приуроченных к празднованию 155-летия Амурской области.</p>
                    
                  <p>В «День единых действий» с 13.00 до 16.00 дети рисовали красками на снегу «поздравительные открытки». Все открытки, которые выполнили ребята, нарисованы с использованием символики Приамурья и содержат поздравительное обращение. Темы обращений, оформление, способ изложения, литературные приемы ребята выбирали самостоятельно.</p>
                    
                  <p>По итогам проведения акции самые активные участники будут приглашены на областную профильную смену «Юный лидер», которая пройдет в мае 2013 года.</p>

                  <p><a href="http://www.obramur.ru/news">http://www.obramur.ru/news</a></p>
                </div>
                
                <div class="article_author" style="display:none;">Константин Константинович Константиновский</div>
                
                <a href="http://www.obramur.ru/news" class="url" style="display:none;">Какой-то урл</a>
                
                <div class="atricles_id_media" style="display:none;">Какое-то АйДи медиа</div>
              
                
                <!--Поделиться в соцсетях-->
                <div class="atricle_share">
                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
  <script src="https://yastatic.net/share2/share.js"></script>
  <div class="ya-share2 ya-share2_inited" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""><div class="ya-share2__container ya-share2__container_size_m"><ul class="ya-share2__list ya-share2__list_direction_horizontal"><li class="ya-share2__item ya-share2__item_service_vkontakte"><a class="ya-share2__link" href="https://vk.com/share.php?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="ВКонтакте"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">ВКонтакте</span></a></li><li class="ya-share2__item ya-share2__item_service_facebook"><a class="ya-share2__link" href="https://www.facebook.com/sharer.php?src=sp&amp;u=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Facebook"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Facebook</span></a></li><li class="ya-share2__item ya-share2__item_service_odnoklassniki"><a class="ya-share2__link" href="https://connect.ok.ru/offer?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Одноклассники"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Одноклассники</span></a></li><li class="ya-share2__item ya-share2__item_service_moimir"><a class="ya-share2__link" href="https://connect.mail.ru/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;title=%D0%97%D0%B0%20%D0%B8%D0%B7%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8%D0%B5.%20%D0%9A%D0%BE%D0%BB%D0%BF%D0%BD%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%B7%D0%B5%D1%82%D0%B0%20%D0%BE%D1%80%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8.&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Мой Мир"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter">0</span></span><span class="ya-share2__title">Мой Мир</span></a></li><li class="ya-share2__item ya-share2__item_service_gplus"><a class="ya-share2__link" href="https://plus.google.com/share?url=https%3A%2F%2Finforos.ru%2Fwww_federalpress%2Fza_izobilie%2Findex_news.html%3Fmodule%3Darticles%26action%3Dview%26id%3D97&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Google+"><span class="ya-share2__badge"><span class="ya-share2__icon"></span></span><span class="ya-share2__title">Google+</span></a></li></ul><iframe class="ya-share2__iframe" src="https://yastatic.net/share2/frame.html?namespace=ya-share2.0.10211816412952235" style="border: 0; display: none; position: absolute; left: -9999px;"></iframe></div></div>
                
                <div id="print" class="atricle_print" style="cursor:pointer;"><img src="img/print.png" alt="Распечатать" width="25" height="25"></div>
                </div>
                <!--Поделиться в соцсетях-->
                
                
                <!--Комментарии к новости-->
                <footer>
                <div class="article_comments">
                  
                    <div id="commentsform" class="article_commentsform"> <a name="cp"></a>
                      <h3>Комментарии</h3>
                      <a name="cf"></a>
                      <div id="commtext"></div>
                      
                      <form id="commform">
                        <input type="hidden" name="namemod" id="namemodcomm" value="comm">
                        <input type="hidden" name="contid" id="contid" value="97">
                        
                        
                        <!--Авторизованный пользователь-->
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
                        <!--Авторизованный пользователь-->
                        
                        
                        <!--Text-->
                        <div id="commmessagediv" class="form_item">
                        <textarea name="message" rows="10" cols="50" placeholder="Напишите ваши мысли о публикации" id="commmessage"></textarea>
                        </div>
                        <!--Text-->
                        
                        <!--reCCAPTCHA-->
                        <div id="commcaptchadiv" class="form_item">
                        <div id="g-recaptcha" data-onloadcallbackname="onloadCallback" data-verifycallbackname="verifyCallback">
                        <img src="img/captcha.jpg" height="60px">
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
                <!--Комментарии к новости-->
                
              
              </div>
              <!--Новость-->
              
              
              
              <!--Список новостей-->
              <div class="article_list" style="display:none;">
              	
                <div class="article_header">
                  <!--Название рубрики-->
                  <div id="ulrubrics" class="article_rubrics">
                    <a href="?module=articles&amp;action=list&amp;rubrics=19&amp;id=0"><h3>Спорт</h3></a>
                  </div>
                  <!--Название рубрики-->
                </div>
                
                
                <!--Новость 1-->
                <div class="article_list_item">
                  <article> 
                    
                    <div class="news_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Новость 1-->
                
                
                
                
                <!--Новость 2-->
                <div class="article_list_item">
                  <article> 
                    
                    <div class="news_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Новость 2-->
                
                
                
                <!--Новость 3-->
                <div class="article_list_item">
                  <article> 
                    
                    <div class="news_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>

                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Новость 3-->
                
                
                
                
                <!--Новость 4-->
                <div class="article_list_item">
                  <article> 
                    
                    <div class="news_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Новость 4-->
                
                
                
                <!--Новость 5-->
                <div class="article_list_item">
                  <article> 
                    
                    <div class="news_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Областная сетевая акция «Мы – будущее региона»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>28 февраля 2013 года 110 школ, 4500 активистов детских общественных объединений из 20 муниципальных образований Амурской области в возрасте от 12 до 17 лет приняли участие в областной сетевой акции «Мы - будущее региона».</p>
                      </span> 
                      <!--Intro published --> 
                    
                    </a>
                    
                    <footer> 
                      <!--Статистика-->
                      <div class="stat"> 
                        
                        <!--Просмотры-->
                        <div class="view">
                          <div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
                          <div class="content wrap_right">896</div>
                        </div>
                        <!--Просмотры--> 
                        
                        <!--Комментарии-->
                        <div class="comment"> <a itemprop="discussionUrl" href="?comments=1">
                          <div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
                          <div class="content wrap_right">243</div>
                          </a> </div>
                        <!--Комментарии--> 
                        
                      </div>
                      <!--Статистика--> 
                    </footer>
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Новость 5-->
              
              
                <!--Пагинация новостей-->
                <div class="article_list_pages">
                    <div class="paginator"> 
                    <span>1</span> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">2</a> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=3">3</a> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=4">4</a> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=5">5</a> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=6">...</a> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">23</a> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">...</a> 
                    <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">»»</a>
                    </div>
                </div>
                <!--Пагинация новостей-->
              
              
              </div>
              <!--Список новостей-->
              
              <!-------------------------------------Новость подробно------------------------------------------->
              
              
              
              
              <!-------------------------------------Архив------------------------------------------->
              
              <!--Список номеров газет-->
              <div class="article_list" style=" display:none;">
              	
                <!--Name-->
                <div class="article_name">
                  <h1>Архив номеров</h1>
                </div>
                <!--Name-->
                
                
                <!--Номер 1-->
                <div class="archive_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_03.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Номер газеты Витимские зори, пояснения к номеру</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Номер 1-->
                
                
                
                
                <!--Номер 2-->
                <div class="archive_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_02.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Номер газеты Витимские зори, пояснения к номеру</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Номер 3-->
                
                
                
                <!--Номер 3-->
                <div class="archive_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_04.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Номер газеты Витимские зори, пояснения к номеру</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Номер 3-->
                
                
                
                
                <!--Номер 4-->
                <div class="archive_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_05.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Номер газеты Витимские зори, пояснения к номеру</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Номер 4-->
                
                
                
                <!--Номер 5-->
                <div class="archive_list_item">
                  <article> 
                    
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                    <!--Image published -->
                    <div class="item_image"> <span class="image" style="background-image:url(media/admin/image_user_pet_01.jpg);"><img src="img/empty.png"></span> 
                    </div>
                    <!--Image published -->
                    </a> 
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Номер газеты Витимские зори, пояснения к номеру</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published--> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Номер 5-->
                              
              <!--Список номеров-->
              
              
              
              <!--Пагинация номеров-->
              <div class="article_list_pages">
                  <div class="paginator"> 
                  <span>1</span> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">2</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=3">3</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=4">4</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=5">5</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=6">...</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">23</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">...</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">»»</a>
                  </div>
              </div>
              <!--Пагинация номеров-->
            
            </div>
              <!--Список номеров газет-->
              
              <!-------------------------------------Архив------------------------------------------->
              
              
              
              
              <!-------------------------------------Результаты поиска------------------------------------------->
              
              <!--Список найденных материалов-->
              <div class="article_list" style=" display:none;">
              	
                
                <div class="article_header">
                  <!--Название рубрики-->
                  <div id="ulrubrics" class="article_rubrics">
                    <h3>Результаты поиска</h3>
                  </div>
                  <!--Название рубрики-->
                </div>
                
                
                <!--Поиск 1-->
                <div class="search_list_item">
                  <article>
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>С.Жээнбеков первым указом присвоил А.Атамбаеву высшую степень отличия «Кыргыз Республикасынын Баатыры»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published-->
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>Как 27 ноября сообщила пресс-служба президента, соответствующий указ подписал президент Сооронбай Жээнбеков. Высшая степень отличия …</p>
                      </span> 
                      <!--Intro published --> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Поиск 1-->
                
                
                
                
                <!--Поиск 2-->
                <div class="search_list_item">
                  <article>
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>На Буране отметили День истории и памяти предков</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published-->
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>Здесь прошло театрализованное выступление артистов Чуйского театра имени Ш. Термечикова. Спектакль под названием «Бору заман», …</p>
                      </span> 
                      <!--Intro published --> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Поиск 2-->
                
                
                
                <!--Поиск 3-->
                <div class="search_list_item">
                  <article>
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Светлой памяти тех, кто стоял у истоков</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published-->
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>Мы вспоминаем их как живых, вплетая с цветами в гирлянды славы героев наше преклонение перед ними за верность великой кыргызской мечте о …</p>
                      </span> 
                      <!--Intro published --> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Поиск 3-->
                
                
                
                
                <!--Поиск 4-->
                <div class="search_list_item">
                  <article>
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>Премьер-министр Сапар ИСАКОВ: «Будущее наступает уже сегодня»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published-->
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>В течение этого времени будут отработаны такие проекты, как «Умный город». Люди начали понимать, что цифровизация приведет страну к …</p>
                      </span> 
                      <!--Intro published --> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Поиск 4-->
                
                
                
                <!--Поиск 5-->
                <div class="search_list_item">
                  <article>
                    
                    
                    <div class="article_content"> 
                    <a href="?module=articles&amp;action=view&amp;id=97"> 
                      
                      <!--Header published-->
                      <h2>А. АТАМБАЕВ: «Я верю, что Кыргызстан станет страной свободных и благополучных людей»</h2>
                      <!--Header published--> 
                      
                      <!--Date published-->
                      <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
                      <!--Date published-->
                      
                      <!--Intro published --> 
                      <span class="intro">
                      <p>Как сообщил Отдел информационной политики Аппарата президента КР, в своей речи А. Атамбаев отметил, что только вместе можно построить мир, …</p>
                      </span> 
                      <!--Intro published --> 
                                          
                    </a>
                    
                    
                    </div>
                  
                  </article>
                
                </div>
                <!--Поиск 5-->
                              
              <!--Список материалов-->
              
              
              
              
              <!--Найти заново-->
              <div class="search_list_item">
                  <article>
                    
                    
                    <div class="article_content"> 
                      <div class="search list">
                        <form action="" method="get">
                          <input type="hidden" name="module" value="search">
                          <input type="text" name="query" class="search_text" placeholder="поиск по сайту" value="президент">
                          <input type="submit" value="" class="search_image">
                        </form>
                      </div>
                    </div>
                  
                  </article>
                
                </div>
                <!--Найти заново-->
              
              
              
              <!--Пагинация материалов-->
              <div class="article_list_pages">
                  <div class="paginator"> 
                  <span>1</span> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">2</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=3">3</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=4">4</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=5">5</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=6">...</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">23</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=2">...</a> 
                  <a href="?module=articles&amp;action=list&amp;rubrics=2&amp;id=0&amp;page=23">»»</a>
                  </div>
              </div>
              <!--Пагинация материалов-->
              
              
              
            
            </div>
              <!--Список найденных материалов-->
            
              <!-------------------------------------Результаты поиска------------------------------------------->
              
              
              
              
              <!------------------------------Отправить сообщение------------------------------------>
              
              <div class="article_feedback" style="display:none;">
                
                
                
                
                
                <!--Name-->
                <div class="article_name">
                  <h1>Написать сообщение</h1>
                </div>
                <!--Name-->
                
                
                
                <div class="article_text">
                  <p>Правила размещения сообщений и комментириев</p>
                </div>
                
                
              
                <!--Сообщение-->
                <div class="article_comments">
                  
                    <div id="commentsform" class="article_commentsform"> <a name="cp"></a>
                      <h3>Сообщение</h3>
                      <a name="cf"></a>
                      <div id="commtext"></div>
                      
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
                        <textarea name="message" rows="10" cols="50" placeholder="Напищите нам" id="commmessage"></textarea>
                        </div>
                        <!--Text-->
                        
                        <!--reCCAPTCHA-->
                        <div id="commcaptchadiv" class="form_item">
                        <div id="g-recaptcha" data-onloadcallbackname="onloadCallback" data-verifycallbackname="verifyCallback">
                        <img src="img/captcha.jpg" height="60px">
      <!--<div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfNXxgUAAAAACw097yvsEVrNnZ9_D8GLn0fXB4J&amp;co=aHR0cHM6Ly93d3cubm92YXlhZ2F6ZXRhLnJ1OjQ0Mw..&amp;hl=ru&amp;type=image&amp;v=r20171031153338&amp;theme=light&amp;size=normal&amp;cb=ge36y1lwlba1" width="50%" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 125px; height: 20px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div>-->
                        </div>
                        </div>
                        <!--reCCAPTCHA-->
                        
                        
                        <!--Enter - Reset-->
                        <div class="form_item" style="margin-bottom:0;">
                        <input type="submit" class="button" value="Отправить">
                        <input type="reset" class="button" value="Очистить">
                        </div>
                        <!--Enter - Reset-->
                      
                      </form>
                    </div>
                  
                  
                </div>
                <!--Сообщение-->
              
              
              </div>
              
              <!------------------------------Отправить сообщение------------------------------------>
                
                
              </article>
              
              
            </div>
						<!--О нас, Статья, Новости, Архив, Результаты поиска-->
						
						
						
						
						
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
								<span class="image" style="background-image:url(media/DS_87L.jpg);"><img src="img/empty.png"></span>
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
													<div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
													<div class="content wrap_right">896</div>
												</div>
												<!--Просмотры-->
												
												<!--Комментарии-->
												<div class="comment">
													<a itemprop="discussionUrl" href="?comments=1">
														<div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
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
							<img src="img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 05" style="display: none !important;"> <span>Рекламный баннер 468x60 px 05</span>
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
								<span class="image" style="background-image:url(media/DS_94L.jpg);"><img src="img/empty.png"></span>
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
													<div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
													<div class="content wrap_right">896</div>
												</div>
												<!--Просмотры-->
												
												<!--Комментарии-->
												<div class="comment">
													<a itemprop="discussionUrl" href="?comments=1">
														<div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
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
							<img src="img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 06" style="display: none !important;"> <span>Рекламный баннер 468x60 px 06</span>
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
								<span class="image" style="background-image:url(media/0640023.jpg);"><img src="img/empty.png"></span>
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
													<div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
													<div class="content wrap_right">896</div>
												</div>
												<!--Просмотры-->
												
												<!--Комментарии-->
												<div class="comment">
													<a itemprop="discussionUrl" href="?comments=1">
														<div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
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
							<img src="img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 07" style="display: none !important;"> <span>Рекламный баннер 468x60 px 07</span>
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
								<span class="image" style="background-image:url(media/0640011.jpg);"><img src="img/empty.png"></span>
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
													<div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
													<div class="content wrap_right">896</div>
												</div>
												<!--Просмотры-->
												
												<!--Комментарии-->
												<div class="comment">
													<a itemprop="discussionUrl" href="?comments=1">
														<div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
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
							<img src="img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 08" style="display: none !important;"> <span>Рекламный баннер 468x60 px 08</span>
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
								<span class="image" style="background-image:url(media/DS_15L.jpg);"><img src="img/empty.png"></span>
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
													<div class="icon"><img src="img/Icon_view.svg" alt="Поросмотров:"></div>
													<div class="content wrap_right">896</div>
												</div>
												<!--Просмотры-->
												
												<!--Комментарии-->
												<div class="comment">
													<a itemprop="discussionUrl" href="?comments=1">
														<div class="icon"><img src="img/Icon_comment.svg" alt="Комментариев:"></div>
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
    <div class="banner_placement">
      <div id="banner_8" class="banner_content banner_234_60">
      <img src="img/banner_234_60.jpg" alt="Рекламный баннер 234_60 px 08"> <span>Рекламный баннер 234x60 px 08</span>
      </div>
    </div>  
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
        <li><a href="index_subscribe.html"><img src="/img/icon_subscribe.svg" alt="Подписаться на новости">Подписаться на новости</a></li>
      </ul>
    </div>
    <!--Подписка-->
    
    
    
    
    <!--Рекламное место 09 баннер 234_60-->
    <div class="banner wrap_bottom" style="display:none;">
    <div class="banner_placement">
      <div id="banner_9" class="banner_content banner_234_60">
      <img src="img/banner_234_60.jpg" alt="Рекламный баннер 234_60 px 09"> <span>Рекламный баннер 234x60 px 09</span>
      </div>
    </div>  
    </div>
    <!--Рекламное место 09 баннер 234_60-->
    
    
    
    
            <!--Анонсы комментарий-->
            <?
            use app\components\CommentsBlock;
            echo CommentsBlock::widget();
            ?>
            <!--Анонсы комментарий-->
    
    
    
    
    <!--Форум-->
    <article class="aside_item wrap_bottom">
      
      
      <header class="header_item">
      <h4>Темы форумов</h4>
      <a href="index_forum_list.hmtl" class="see_all">Все</a>
      </header>
      
      
      
      <!--Forum item 01-->
      <div class="public_item forum wrap_left wrap_right wrap_main">
        <article>
          
          <!--Date published-->
          <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
          
          <a href="index_forum.hmtl">
          <!--Forum Name published-->
          <p><span class="id_catalog">Интересная тема форума 01</span></p> 
          
          <!--Forum Number published-->
          <div class="view">
          <div class="content">Сообщений: 896</div>
          </div>
          </a>
          
       </article>
      <div class="bottom_forum"></div>
      </div>
      
      <!--Forum item 01-->
      
      
      
      
      <!--Forum item 02-->
      <div class="public_item forum wrap_left wrap_main">
        <article>
          
          <!--Date published-->
          <p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
          
          <a href="index_forum.hmtl">
          <!--Forum Name published-->
          <p><span class="id_catalog">Словесный брахикаталектический стих глазами современников</span></p>
          
          <!--Forum Number published-->
          <div class="view">
          <div class="content">Сообщений: 12 354 345</div>
          </div>
          </a>
       </article>
       
       <div class="bottom_forum"></div>
      </div>
      <!--Forum item 02-->
      
      
    </article>
    <!--Форум-->
		
		
		
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
        <li><a href="index_mail_list.html"><img src="/img/icon_mail.svg">Письма читателей</a></li>
      </ul>
    </div>
    <!--Письма читателей-->
		
		
		
            <!--Партнеры-->
            <?
            // виджет партнеры
            use app\components\getPartners;
            echo getPartners::widget();
            ?>
            <!--Партнеры-->
    
    
    
    
    </div>
    
  </aside>
  <!--Левая колонка-->
  
  
  


  <!--Рекламное место 03 баннер 728x90-->
  
  <!--Рекламное место 03 баннер 728x90-->





  <!--Новости от Инфорос-->
  
  <!--Новости от Инфорос-->

  
  
  
  <!--Рекламное место 04 баннер 728x90-->
  
	<!--Рекламное место 04 баннер 728x90-->
  
  
  
  
  
  
  
  <!--Средняя колонка-->
  <div class="middle">
    <div class="middle_collumn wrap_bottom">
      <article class="sys_middle_collumn">
            <div class="top_main_middle">
              <article>
              <?=$content;?>
              </article>
            </div>
	<!--Рубрика 01-->
            <?
            // виджет последние статьи рубрик
            use app\components\getLastArtRub;
            echo getLastArtRub::widget();
            ?>
        <!--/Рубрика 01-->
            
            
            
            
            
            
            <!--Рекламное место 05 баннер 468_60-->
            <div class="banner wrap_bottom" style="display:none;">
            <div class="banner_placement">
              <div id="banner_5" class="banner_content banner_468_60">
              <img src="/img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 05" style="display: none !important;"> <span>Рекламный баннер 468x60 px 05</span>
              </div>
            </div>  
            </div>
            <!--Рекламное место 05 баннер 468_60-->
            

						
						
						
						
						<!--Топ статей-->
						<div class="top_main_middle top_articles">
							
							<!--Header Топ статей-->
							<header><h3>Топ статей</h3></header>
							<!--Header Топ статей-->
							
							<!--Читаемые-->
							<h4>Читаемые:</h4>
							<div class="top_reading">
							
								
            <?
            // виджет читаемые статьи
            use app\components\ReadArticles;
            echo ReadArticles::widget();
            ?>
							
							</div>
							
							
							<!--Комментируемые-->
							<h4>Комментируемые:</h4>
							<div class="top_commeting">
							
									<!--Статья №1-->
									<article>
										
										<div class="article_content">
											<a href="index_article.html">
											<!--Header published-->
											<h2>Режиссер «Стартрека» и «Звездных войн» занялся сериалом про космос</h2>
											<!--Header published-->
											</a>
											
											<footer>
													<!--Статистика-->
													<div class="stat">
													
														<!--Просмотры-->
														<div class="view">
															<div class="icon"><img src="/img/Icon_comment.svg" alt="Поросмотров:"></div>
															<div class="content wrap_right">12 376</div>
														</div>
														<!--Просмотры-->
														
													</div>
													<!--Статистика-->
											</footer>
										</div>
									
									</article>
									<!--Статья №1-->
									
									
									<!--Статья №2-->
									<article>
										
										<div class="article_content">
											<a href="index_article.html">
											<!--Header published-->
											<h2>Во время чемпионата мира — 2018 могут появиться дополнительные прямые авиарейсы</h2>
											<!--Header published-->
											</a>
											
											<footer>
													<!--Статистика-->
													<div class="stat">
													
														<!--Просмотры-->
														<div class="view">
															<div class="icon"><img src="/img/Icon_comment.svg" alt="Поросмотров:"></div>
															<div class="content wrap_right">5 376</div>
														</div>
														<!--Просмотры-->
														
													</div>
													<!--Статистика-->
											</footer>
										</div>
									
									</article>
									<!--Статья №2-->
									
									<!--Статья №3-->
									<article>
										
										<div class="article_content">
											<a href="index_article.html">
											<!--Header published-->
											<h2>Eurosport Gold – эксклюзивный спортивный телеканал для зрителей «Интерактивного ТВ» от «Ростелекома»</h2>
											<!--Header published-->
											</a>
											
											<footer>
													<!--Статистика-->
													<div class="stat">
													
														<!--Просмотры-->
														<div class="view">
															<div class="icon"><img src="/img/Icon_comment.svg" alt="Поросмотров:"></div>
															<div class="content wrap_right">871</div>
														</div>
														<!--Просмотры-->
														
													</div>
													<!--Статистика-->
											</footer>
										</div>
									
									</article>
									<!--Статья №3-->
									
							
							</div>
							
						</div>
						<!--Топ статей-->
						
						
						<!--Рекламное место 09 баннер 468_60-->
						<div class="banner wrap_bottom" style="display:none;">
						<div class="banner_placement">
							<div id="banner_7" class="banner_content banner_468_60">
							<img src="/img/banner_468_60.jpg" alt="Рекламный баннер 468_60 px 06" style="display: none !important;"> <span>Рекламный баннер 468x60 px 06</span>
							</div>
						</div>  
						</div>
						<!--Рекламное место 09 баннер 468_60-->
						
						
						<!--Одной строкой-->
						<div class="top_main_middle top_articles" id="one-string">
							
							<!--Header Топ статей-->
							<header><h3>Одной строкой</h3></header>
							<!--Header Топ статей-->
							
							
							
							<div class=" jcarousel-skin-tango"><div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;"><ul class="jcarousel-list jcarousel-list-horizontal" data-visible="1" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 4240px;">
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>Покупайте в Колпне!</h2></span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>Покупайте все Орловское!</h2></span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>Покупайте российское!</h2></span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>Заместителем главы администрации назначен Евгений Николаевич Астапов</h2></span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal" jcarouselindex="5" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>По итогам зрительского голосования на конкурсе Евровидение-2016 в Стокгольме победителем стал Сергей Лазарев</h2></span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-6-horizontal" jcarouselindex="6" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>Заместителем главы администрации по социальным вопросам назначена Наталья Александровна Строганова</h2></span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-7 jcarousel-item-7-horizontal" jcarouselindex="7" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>Председателем Совета ветеранов избран Валерий Николаевич Пнюшков</h2>
	</span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-8 jcarousel-item-8-horizontal" jcarouselindex="8" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>Главой Озёрского городского округа депутаты Совета единогласно избрали В.В. Никонорова</h2></span></li>
									<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-9 jcarousel-item-9-horizontal" jcarouselindex="9" style="float: left; list-style: none; width: 460px;"><span class="h_2 name"><h2>17 декабря МФЦ - многофункциональному центру исполнился год</h2></span></li>
							</ul></div><div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" style="display: block;" disabled="disabled"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div></div></div>
							
							
							
							
							
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
    <div class="banner_placement">
      <div id="banner_12" class="banner_content banner_234_60">
      <img src="/img/banner_234_60.jpg" alt="Рекламный баннер 234_60 px 12"> <span>Рекламный баннер 234x60 px 12</span>
      </div>
    </div>  
    </div>
    <!--Рекламное место 12 баннер 234_60-->
    
    
    
		
		<!--Анонсы фотогаллерей-->
    <article class="aside_item wrap_bottom">
    
      <header class="header_item">
        <h4>Фотогаллерея</h4><a href="index_fotogallery_list.html" class="see_all">Все</a>
      </header>
      
      <!--Анонс галлерея 01-->
      <div class="public_item">
        
        <article>
							<!--Date published-->
							<p><time itemprop="datePublished" datetime="2014-10-08">2014-10-08</time></p>
							<!--Date published-->
						
						<a href="index_fotogallery.html">
							<!--Image published -->
							<div class="item_image">
							<span class="image" style="background-image:url(/media/admin/global_Energy_Sammit.jpg);"><img src="/img/empty.png"></span>
							</div>
							<!--Image published -->
					
						<!--Header published-->
						<h2>Историко-краеведческий музей Озёрска ждёт Вас!</h2>
						<!--Header published-->
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
										<a itemprop="discussionUrl" href="index_fotogallery.html">
											<div class="icon"><img src="/img/Icon_comment.svg" alt="Комментариев:"></div>
											<div class="content wrap_right">243</div>
										</a>
									</div>
									<!--Комментарии-->
									
								</div>
								<!--Статистика-->
						</footer>
					
          
        </article>  
      
      </div>      
      <!--Анонс галлерея 01-->
      
    
    </article>
    <!--Анонсы фотогаллерей-->
    
    
    
    <!--Рекламное место 11 баннер 234_60-->
    <div class="banner wrap_bottom" style="display:none;">
    <div class="banner_placement">
      <div id="banner_11" class="banner_content banner_234_60">
      <img src="/img/banner_234_60.jpg" alt="Рекламный баннер 234_60 px 11"> <span>Рекламный баннер 234x60 px 11</span>
      </div>
    </div>  
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
    <div class="banner_placement">
      <div id="banner_9" class="banner_content banner_234_60">
      <img src="/img/banner_234_60.jpg" alt="Рекламный баннер 234_60 px 10"> <span>Рекламный баннер 234x60 px 10</span>
      </div>
    </div>  
    </div>
    <!--Рекламное место 10 баннер 234_60-->
    
    
    
    <!--Предприятия-->
    <article class="aside_item catalog wrap_bottom">
      
      
      <header class="header_item">
      <h4>Каталог предприятий</h4>
      </header>
      
      <!--Catalog item 01-->
      <div class="public_item">
        <article>
          <!--Catalog icon published-->
          <a href="index_catalog_list.html">
           <span class="id_catalog_icon"><img src="/img/auto.svg" alt="Авто"></span>
          <!--Catalog Name published-->
          <p><span class="id_catalog">Автомобили, транспорт, перевозки</span></p> </a>
          
       </article>
      </div>
      <!--Catalog item 01-->
      
      <!--Catalog item 02-->
      <div class="public_item">
        <article>
          <!--Catalog icon published-->
          <a href="index_catalog_list.html"> 
          <span class="id_catalog_icon"><img src="/img/security.svg" alt="Авто"></span>
          <!--Catalog Name published-->
          <p><span class="id_catalog">Безопасность</span></p> </a>
          
       </article>
      </div>
      <!--Catalog item 02-->
      
      <!--Catalog item 03-->
      <div class="public_item">
        <article>
          <!--Catalog icon published-->
          <a href="index_catalog_list.html"> 
          <span class="id_catalog_icon"><img src="/img/law.svg" alt="Авто"></span>
          <!--Catalog Name published-->
          <p><span class="id_catalog">Бизнес, право, финансы</span></p> </a>
          
       </article>
      </div>
      <!--Catalog item 03-->
      
      <!--Catalog item 04-->
      <div class="public_item">
        <article>
          <!--Catalog icon published-->
          <a href="index_catalog_list.html"> 
          <span class="id_catalog_icon"><img src="/img/appliances.svg" alt="Авто"></span>
          <!--Catalog Name published-->
          <p><span class="id_catalog">Бытовые услуги</span></p> </a>
          
       </article>
      </div>
      <!--Catalog item 04-->
      
      <!--Catalog item 05-->
      <div class="public_item">
        <article>
          <!--Catalog icon published-->
          <a href="index_catalog_list.html"> 
          <span class="id_catalog_icon"><img src="/img/buildings.svg" alt="Авто"></span>
          <!--Catalog Name published-->
          <p><span class="id_catalog">Государственные органы</span></p> </a>
          
       </article>
      </div>
      <!--Catalog item 05-->
      
      <!--Catalog item 06-->
      <div class="public_item">
        <article>
          <!--Catalog icon published-->
          <a href="index_catalog_list.html"> 
          <span class="id_catalog_icon"><img src="/img/communication.svg" alt="Авто"></span>
          <!--Catalog Name published-->
          <p><span class="id_catalog">Коммуникации и связь</span></p> </a>
          
       </article>
      </div>
      <!--Catalog item 06-->
      
      <!--Catalog item 07-->
      <div class="public_item">
        <article>
          <!--Catalog icon published-->
          <a href="index_catalog_list.html"> 
          <span class="id_catalog_icon"><img src="/img/art.svg" alt="Авто"></span>
          <!--Catalog Name published-->
          <p><span class="id_catalog">Культура и искуство</span></p> </a>
          
       </article>
      </div>
      <!--Catalog item 07-->
      
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
        
        <article>
        
          <!--Header published-->
          <div class="questvote">
          <h2>Оцените наш новый супер адаптивный, супер респонсивный, супер удобный дизайн:</h2>
          </div>
          
          <div class="voteformstyle">
          <form name="vote" action="/?voted=1" method="POST" onsubmit="pushVote($(this)); return false; ">
            <input type="hidden" name="id" class="vote_id" value="1">
            
            <div class="form_item">
            <input type="radio" name="vote" value="2">
            <label>Я доволен</label>
            </div>
            
            
            <div class="form_item">
            <input type="radio" name="vote" value="3">
            <label>Отношусь нейтрально</label>
            </div>
        
            
            <div class="form_item">
            <input type="radio" name="vote" value="4">
            <label>Недоволен</label>
            </div>
            
            <div class="form_item">
            <input type="radio" name="vote" value="5">
            <label>Очень недоволен</label>
            </div>
            
            <input class="button" type="submit" value="Голосовать">
          </form>
          </div>
        </article>  
      
      </div>      
      
      
    
    </article>
    <!--Голосование-->
		
		
		
		<!--Вопрос ответ-->
    <article class="aside_item wrap_bottom">
    
      <header class="header_item">
        <h4>Вопрос-ответ</h4><a href="index_question_answer_list.html" class="see_all">Все</a>
      </header>
      
      <!--Вопрос 01-->
      <div class="public_item">
        
        <article>
          
          
          <!--Header published-->
          <h2>Каково административно-территориальное деление Орловской области?</h2>
          <!--Text published-->
					<a itemprop="answerUrl" href="index_question_answer.html">
          <span class="intro"><p>Административным центром является город Бишкек. В состав современной Орловской области входит: 8 районов: Панфиловский …</p></span>
          </a>
          
          <footer>
            <a itemprop="answerUrl" href="index_question_answer.html">Подробнее...</a>
          </footer>
        </article>  
      
      </div>      
      <!--Вопрос 01-->
      
      
      <!--Задать вопрос-->
      <div class="public_item">
          <header class="header_item">
            <h4>Задать вопрос</h4>
          </header>
          
        
        	<form action="/question-answer" method="post">
              <input type="hidden" name="namemod" id="namemodqa" value="qa">
              
                  
                  <!--Name-->
                  <div class="form_item">
                  <span class="warning_item" style=""></span>
                  <input class="form_control" type="text" name="username" placeholder="Имя" required="" value="" maxlength="20">
                  </div>
                  <!--Name-->
                  
                  
                  <!--E-mail-->
                  <div class="form_item">
                  <span class="warning_item" style="">Некорректный E-mail</span>
                  <input class="form_control" type="text" name="usermail" placeholder="E-mail" required="" value="" maxlength="20">
                  </div>
                  <!--E-mail-->
                  
                  
                  <!--Text-->
                  <div class="form_item">
                  <textarea name="message" id="qamessage" placeholder="Ваш вопрос" resize="none"></textarea>
                  </div>
                  <!--Text-->
                  
                  
                  <!--reCCAPTCHA-->
                  <div class="form_item">
                  <div id="g-recaptcha" data-onloadcallbackname="onloadCallback" data-verifycallbackname="verifyCallback">
                  <img src="img/captcha.jpg" height="60px">
<!--<div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfNXxgUAAAAACw097yvsEVrNnZ9_D8GLn0fXB4J&amp;co=aHR0cHM6Ly93d3cubm92YXlhZ2F6ZXRhLnJ1OjQ0Mw..&amp;hl=ru&amp;type=image&amp;v=r20171031153338&amp;theme=light&amp;size=normal&amp;cb=ge36y1lwlba1" width="50%" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 125px; height: 20px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div>-->
                  </div>
                  </div>
                  <!--reCCAPTCHA-->
                  
                  
                  <!--Enter-->
                  <div class="form_item">
                  <input type="submit" class="button" value="Спросить">
                  </div>
                  <!--Enter-->
          </form>
          
      
      </div>
      
    
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
      <li><a href="index_news_list.html">Новости</a></li>
      <li><a href="index_about.html">О газете</a></li>
      <li><a href="index_subscribe.html">Подписка</a></li>
      <li><a href="index_archive.html">Архив номеров</a></li>
      <li><a href="index_catalog_list.html">Каталог</a></li>
      <li><a href="index_article.html">Контакты</a></li>
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
  <div class="to_top" title="Наверх" style="margin-right: -690px; display: none;"></div>
  <!--Кнопка Наверх-->

	
	<div class="footer_shadow"></div>
	
	

</div>



</footer>
<!--Footer-->
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
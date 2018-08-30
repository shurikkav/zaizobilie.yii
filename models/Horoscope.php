<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "core_contents".
 *
 * @property string $id #
 * @property string $pid Подраздел
 * @property string $id_unit Модуль
 * @property string $regions Регион
 * @property string $issues Издания
 * @property string $rubrics Рубрика
 * @property string $themes Темы
 * @property string $plots Сюжет
 * @property string $name Заголовок
 * @property string $subname Подзаголовок
 * @property string $meta_title Заголовок в Мета-теге
 * @property string $meta_keywords Ключевые слова в Мета-теге
 * @property string $meta_description Описание в Мета-теге
 * @property string $intro Краткое описание
 * @property string $text Подробное описание
 * @property string $img0 Фото на информер
 * @property string $img1 Миниатюра
 * @property string $img2 Фото на главной
 * @property string $img3 Фото детально
 * @property string $author Автор
 * @property string $source Источник имя
 * @property string $url Источник url
 * @property string $file Файл
 * @property string $date Дата создания
 * @property string $date_start Дата публикации
 * @property string $date_end Дата завершения
 * @property string $id_media Медиа
 * @property string $is_main Главная тема
 * @property string $is_block В блок
 * @property string $view Кол-во просмотров
 * @property string $id_user Пользователь
 * @property string $plugin Модуль раздела
 * @property string $link Ссылка раздела
 * @property string $ads Рубрики объявлений
 * @property string $rubnews Рубрики новостей
 * @property string $rub_rss Рубрики Инфороса
 * @property string $sort Сортировка
 * @property string $is_vis Публикация
 */
class Horoscope extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'core_contents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'id_unit', 'regions', 'issues', 'rubrics', 'themes', 'plots', 'author', 'id_media', 'is_main', 'is_block', 'id_user', 'ads', 'rubnews', 'rub_rss', 'sort', 'is_vis'], 'integer'],
            [['subname', 'meta_title', 'meta_keywords', 'meta_description', 'intro', 'text', 'img0', 'img1', 'img2', 'img3', 'source', 'url', 'file', 'date', 'date_start', 'date_end', 'view', 'plugin', 'link'], 'required'],
            [['meta_description', 'intro', 'text'], 'string'],
            [['date', 'date_start', 'date_end'], 'safe'],
            [['name', 'subname', 'meta_title', 'meta_keywords', 'source', 'url', 'view', 'plugin', 'link'], 'string', 'max' => 255],
            [['img0', 'img1', 'img2', 'img3'], 'string', 'max' => 300],
            [['file'], 'string', 'max' => 280],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'id_unit' => 'Id Unit',
            'regions' => 'Regions',
            'issues' => 'Issues',
            'rubrics' => 'Rubrics',
            'themes' => 'Themes',
            'plots' => 'Plots',
            'name' => 'Name',
            'subname' => 'Subname',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
            'intro' => 'Intro',
            'text' => 'Text',
            'img0' => 'Img0',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'img3' => 'Img3',
            'author' => 'Author',
            'source' => 'Source',
            'url' => 'Url',
            'file' => 'File',
            'date' => 'Date',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'id_media' => 'Id Media',
            'is_main' => 'Is Main',
            'is_block' => 'Is Block',
            'view' => 'View',
            'id_user' => 'Id User',
            'plugin' => 'Plugin',
            'link' => 'Link',
            'ads' => 'Ads',
            'rubnews' => 'Rubnews',
            'rub_rss' => 'Rub Rss',
            'sort' => 'Sort',
            'is_vis' => 'Is Vis',
        ];
    }
}

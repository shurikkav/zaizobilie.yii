<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.06.2018
 * Time: 11:22
 */

namespace app\components;


use yii\base\Widget;

class InformerValutWidget extends Widget
{
    private $today = "";
    private $url = "http://www.cbr.ru/currency_base/D_print.aspx?date_req=";
    private $localfile = './kurs';///web/media/kurs
    private $curs = array();
    private $param = array();


    function __construct($date=null) {
        if ($date) $this->today = $date;
        else $this->today = date('d.m.Y');
    }

    function downloadCont() {

        //  Проверяем если ли файл с курсами локально на сервере
        if (file_exists($this->localfile.$this->today)) {
            // "Файл существует и загружаем данные по валютам";
            $curs = @file_get_contents( $this->localfile.$this->today, 0); // Читаем содержимое HTML страницы
            return $curs;
        } else {
            // "Файл не существует выполняем загрузку с сайта Центробанка";

            // URL страницы с курсами валют на сегодня
            $html = @file_get_contents($this->url . "" . $this->today, 0, stream_context_create(array('http' => array('timeout' => 5)))); // Читаем содержимое HTML страницы
            $charset = 'UTF-8'; // кодировка получаемой страницы
            if (!empty($html)) {
                // на данном этапе, находим в коде блок с таблицей курсов и удаляем все лишнее до и после
                $tHtml = explode('<table class="data">', $html);
                $tHtml = explode("</table>", $tHtml[1]);
                $html = '<table class="data">' . $tHtml[0] . "</table>";

                // создаем объект дерева DOM
                $dom = new \DOMDocument("1.0", "UTF-8");
                $dom->loadHTML($html); // загружаем в него спарсенную страницу

                $dom->preserveWhiteSpace = false;
                $tables = $dom->getElementsByTagName('table'); // получаем из дерева DOM первую таблицу, ею является как раз таблица содержащая курсы валют
                $rows = $tables->item(0)->getElementsByTagName('tr'); // получаем из таблицы все строки

                $i = 0;
                $curs = array();
                foreach ($rows as $row) {
                    if ($i == 0) {
                        $i++;
                        continue;
                    }
                    $cols = $row->getElementsByTagName('td');
                    $curs[$cols->item(0)->nodeValue][] = $cols->item(1)->nodeValue; // Valuta
                    $curs[$cols->item(0)->nodeValue][] = $cols->item(2)->nodeValue; // Nominal
                    $curs[$cols->item(0)->nodeValue][] = $cols->item(4)->nodeValue; // Kurs

                    $i++;
                }

                file_put_contents($this->today, $html); //"\web\media\kurs" .
                return $curs;
            }
            return '';
        }
    }

    function getCurs($id=null) {
        $today = $this->downloadCont();
        $this->today = date("d.m.Y", mktime(0, 0, 0, date("m"), date("d") - 1));
        $est = $this->downloadCont();
        $out = array();
        if(!empty($today)&&count($today)>0) {
            foreach ($today as $row => $key) {
                if (!empty($id)&&count($id)>0) {
                    if (!in_array($row,$id)) continue;
                }
                $out[$row][] = $today[$row][0];
                $out[$row][] = $today[$row][1];
                $out[$row][] = str_replace(",",".",$today[$row][2]);
                $out[$row][] = str_replace(",",".",$est[$row][2]) - str_replace(",",".",$today[$row][2]);
            }
            return $out;
        }
        return 0;
    }

     function run() {

        $c = $this->getCurs(array(840, 978));
        $param[USD_VAL]= round($c[840][2], 2);
        $param[EUR_VAL]= round($c[978][2], 2);
        $param[VAL_TODAY]= date('d/m');
        $param[EUR_CHANGE]= round($c[978][3],4);
        $param[USD_CHANGE]= round($c[840][3],4);

        if (round($c[840][3],4) < 0) $param[USD_STATUS]= "usd_down";
        else $param[USD_STATUS]= "usd_up";

        if (round($c[978][3],4) < 0) $param[EUR_STATUS] = "usd_down";
        else $param[EUR_STATUS] = "usd_up";


        return $this->render('InformerValut',compact('param'));
    }


}
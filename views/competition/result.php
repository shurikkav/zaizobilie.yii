<?
use app\controllers\AppController;
use app\models\XTemplate;

$js = file_get_contents($pathJs); // подгружаем javascript для обработки нажатия кнопки

$tpl = new XTemplate("../components/views/CompetitionTpl.php"); //подгружаем шаблон
$tpl->assign("JS", $js); // вставляем скрипт в шаблон

foreach ($vote as $row) {
    $tpl->assign("QUESTION", $row['question']);
    $tpl->parse('MAIN.QUESTION');

    $all  = 0;
    foreach ($row['ans'] as $a) {
        $all += $a['ans'];
    }
    $i=0;
    $koof=5; // 1 - оригинал, 2- увеличение в 2 раза, 3 - увеличение в 3 раза и т.д.
    foreach ($row['ans'] as $a) {
        $pp = round(($a['ans'] / $all)*100,0);
        $tpl->assign("ANSWERTEXT", $a['text']);
        $tpl->assign("ANSWERCOUNT", $a['ans']);
        $tpl->assign("ANSWERPROC", $pp);
        $tpl->assign("ANSWERPROCH", $koof*2);
        $tpl->assign("ANSWERPROCW", $pp*$koof);
        $tpl->assign("ANSWERBG", $backgrounds[$i]);
        $tpl->assign("TOTALVOTE", $all);
        $tpl->parse('MAIN.RESULTS.VOTEVALUE');
        $i++;
    }
    $tpl->parse('MAIN.RESULTS');

}
$tpl->parse('MAIN');
$tpl->out('MAIN');
//echo $tpl;
?>



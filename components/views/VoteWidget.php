<?php
use app\models\XTemplate;

$js = file_get_contents($pathJs); // подгружаем javascript для обработки нажатия кнопки

$tpl = new XTemplate("../components/views/VoteTpl.php"); //подгружаем шаблон
$tpl->assign("JS", $js); // вставляем скрипт в

$sand='&';
if($_SERVER['REQUEST_URI']=="/") $sand='?';
foreach ($vote as $row) {
    $tpl->assign("QUESTION", $row['question']);
    $tpl->parse('MAIN.QUESTION');

    if (!isset($_COOKIE['voted']) || !strpos(" ".$_COOKIE['voted'],$row['id'])) {
        $tpl->assign("ACTIONURL", $_SERVER['REQUEST_URI'].$sand."voted=1");
        $tpl->assign("VOTEID", $row['id']);

        if(!empty($row['ans'])&&count($row['ans'])>0) {
            foreach ($row['ans'] as $a) {
                $tpl->assign("ANSWERID", $a['id']);
                $tpl->assign("ANSWERTEXT", $a['text']);
                $tpl->parse('MAIN.FORM.VOTEVALUE');
            }
            $tpl->parse('MAIN.FORM');
        }
    }   else {
        $all  = 0;
        $tpl->parse('MAIN.RESULTS');
        foreach ($row['ans'] as $a) {
            $pp = round(($a['ans'] / $all)*100,0);
            $tpl->assign("ANSWERTEXT", $a['text']);
            $tpl->assign("ANSWERCOUNT", $a['ans']);
            $tpl->assign("ANSWERPROC", $pp);
            $tpl->parse('MAIN.RESULTS.VOTEVALUE');
        }
    }
}
$tpl->parse('MAIN');
$tpl->out('MAIN');




?>
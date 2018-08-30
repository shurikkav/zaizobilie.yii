<?php
use app\models\XTemplate;

$js = file_get_contents($pathJs); // подгружаем javascript для обработки нажатия кнопки

$tpl = new XTemplate("../components/views/VoteTpl.php"); //подгружаем шаблон
$tpl->assign("JS", $js); // вставляем скрипт в шаблон

if($_SERVER['REQUEST_URI']!="/vote/index") {

    foreach ($vote as $row) {
        $tpl->assign("QUESTION", $row['question']);
        $tpl->parse('MAIN.QUESTION');

        if (!isset(Yii::$app->request->cookies['voted'])) {
            $tpl->assign("ACTIONURL", "/vote/result");
            $tpl->assign("ONSUBMIT", "onsubmit='pushVote($(this)); return false; '");

            $tpl->assign("VOTEID", $row['id']);

            if (!empty($row['ans']) && count($row['ans']) > 0) {
                foreach ($row['ans'] as $a) {
                    $tpl->assign("ANSWERID", $a['id']);
                    $tpl->assign("ANSWERTEXT", $a['text']);
                    $tpl->parse('MAIN.FORM.VOTEVALUE');
                }
                $tpl->parse('MAIN.FORM');
            }
        } else {
            $all  = 0;
            foreach ($row['ans'] as $a) {
                $all += $a['ans'];
            }
            $koof=2;
            $i=0;

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
    }
    $tpl->parse('MAIN');
    $tpl->out('MAIN');
}

?>
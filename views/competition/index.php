<?
use app\controllers\AppController;
use app\models\XTemplate;

// подгружаем javascript для обработки нажатия кнопки
if(strlen($pathJs)>0){$js = file_get_contents($pathJs);}else{$js ="";}

$tpl = new XTemplate("../components/views/competitionTpl.php"); //подгружаем шаблон
$tpl->assign("JS", $js); // вставляем скрипт в шаблон

//var_dump($vote);

foreach ($vote as $row) {
    $tpl->assign("QUESTION", $row['question']);
    $tpl->parse('MAIN.QUESTION');

    if (!isset($_COOKIE['competition']) || !strpos(" ".$_COOKIE['competition'],$row['id'])) {
        $tpl->assign("ACTIONURL", "/competition/result/");
        $tpl->assign("VOTEID", $row['id']);

        if(!empty($row['ans'])&&count($row['ans'])>0) {
            foreach ($row['ans'] as $a) {
                $tpl->assign("ANSWERID", $a['id']);
                $tpl->assign("ANSWERTEXT", $a['text']);
                $pic="";
                if(strlen($a['pic1'])>0){$pic="<img src='/".$a['pic1']."' alt='".$a['podpic']."' border=0>";}
                $tpl->assign("ANSWERPIC", $pic);
                $tpl->parse('MAIN.FORM.VOTEVALUE');
            }
            $tpl->parse('MAIN.FORM');
        }
    }   else {
        $all  = 0;
        foreach ($row['ans'] as $a) {
            $all += $a['ans'];
        }
        foreach ($row['ans'] as $a) {
            $pp = round(($a['ans'] / $all)*100,0);
            $tpl->assign("ANSWERTEXT", $a['text']);
            $tpl->assign("ANSWERCOUNT", $a['ans']);
            $tpl->assign("ANSWERPROC", $pp);
            $pic="";
            if(strlen($a['pic1'])>0){$pic="<img src='".$a['pic1']."' alt='".$a['podpic']."' border=0>";}
            $tpl->assign("ANSWERPIC", $pic);
            $tpl->parse('MAIN.RESULTS.VOTEVALUE');
        }
        $tpl->parse('MAIN.RESULTS');
    }
}
$tpl->parse('MAIN');
$tpl->out('MAIN');
?>



<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

//(new yii\web\Application($config))->run();

require __DIR__ . '/../models/Vote.php';


//use app\models\Vote;

$connection = \Yii::$app->db;

if(intval($_POST["id"])>0 && intval($_POST["vote"])>0 ){
    $id=intval($_POST["id"]);
    $ans=intval($_POST["vote"]);

    var_dump($connection);
    //$model = $connection->createCommand("UPDATE  `core_votes` SET  `votes` = votes + 1 WHERE  `id` =$ans AND `pid`=$id");
    //$data = $model->queryAll();

    if ($_COOKIE['voted']) {
        setcookie('voted', "1". "," .$id);
    }

    echo "true";
    echo date("H:i:s ")."id=$id and ans=$ans";
}
else{
    echo "<p>Не удалось сохранить Ваше голосование.</p>";
}







<?
use app\controllers\AppController;
use yii\helpers\Html;
use app\models\Subscribe;

use yii\widgets\ActiveForm;
?>

<div class="article_list" style=" ">

    <div class="article_header">
        <div id="ulrubrics" class="article_rubrics">
            <h3>Подписка (активация почтового ящика)</h3>
        </div>
    </div>

    <p>Благодарим, что подписались на нашу рассылку!</p>
    <p>Почтовый адрес <?= $email; ?> активирован.
    </p>
</div>
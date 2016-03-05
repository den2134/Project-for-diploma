<?php
/* @var $this yii\web\View */

$this->title = 'Junny main page';
?>
<div class="site-index">
    <div class="jumbotron hello">
        <h1>Привет. <?=Yii::$app->user->identity->f_name?></h1>
    </div>
    <div class="row">
        <div class="col-md-12 about-main">
            <p>Мы научим тебя печатать быстро и без ошибок, <a href="/frontend/web/index.php?r=play/type/words">попробуй</a> ;)</p>
        </div>
    </div>
    <div class="row set-btn">
            <ul>
                <li><a href="/frontend/web/index.php?r=play/type/words"><button class="own-btn">Играть</button></a></li>
                <li><button class="own-btn">Рекомендации</button></li>
                <li><button class="own-btn">Наш блог</button></li>
            </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12"></div>
    </div>
</div>

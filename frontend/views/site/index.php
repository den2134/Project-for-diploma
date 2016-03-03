<?php
//$this->registerJsFile('js/jquery.firefly-0.5.js', ['yii\web\JqueryAsset']);
$this->registerJsFile('yii\web\JqueryAsset');
$this->registerJsFile('js/jquery.firefly-0.5.js');

/* @var $this yii\web\View */

$this->title = 'Junny main page';
?>
<div class="site-index">
    <div class="jumbotron hello">
        <h1>Привет. <?=Yii::$app->user->identity->f_name?></h1>
    </div>
    <div class="row">
        <div class="col-md-12 about-main">
            <p>Мы научим тебя печатать быстро и без ошибок, <a href="#">попробуй</a> ;)</p>
        </div>
    </div>
    <div class="row set-btn">
            <ul>
                <li><a href="/frontend/web/index.php?r=play"><button class="own-btn">Играть</button></a></li>
                <li><button class="own-btn">Рекомендации</button></li>
                <li><button class="own-btn">Наш блог</button></li>
            </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12"></div>
    </div>
</div>

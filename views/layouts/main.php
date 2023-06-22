<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\authclient\widgets\AuthChoice;
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Html::csrfMetaTags(); ?>
    <link rel="icon" href="/favicon.ico">
    <title><?php echo Html::encode($this->title); ?></title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="wrap" id="app" >
<?= AuthChoice::widget([
    'baseAuthUrl' => ['site/auth'],
    'popupMode' => true,
]) ?>
<footer class="footer" role="contentinfo">
    
</footer>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
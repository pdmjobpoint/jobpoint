<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->registerCss("
    div.required label.control-label:after {
        content: \" *\";
        color: red;
    }
");

$roles      = "";
$user_role  = "";

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="profile-page sidebar-collapse">
<?php $this->beginBody() ?>

<?php 

if (Yii::$app->controller->action->id === 'login' || Yii::$app->controller->action->id === 'register') {
    echo $this->render('main-login', ['content' => $content]);
} else {

?>
    <?= $this->render('nav'); ?>
    <div class="page-header" data-parallax="true" style="height: 150px;"></div>
    
    <div class="main main-raised">
        <div class="container" >
            <div class="row">
                <div class="col-md-12"><br>
                    <!-- BREADCRUMBS -->
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <!-- ALERT WIDGET -->
                    <?= Alert::widget() ?>
                    <!-- CONTENT -->
                    <?= $content ?>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <?= $this->render('footer'); ?>

<?php } ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php 


if (Yii::$app->controller->action->id === 'login' || Yii::$app->controller->action->id === 'register') {
    echo $this->render('main-login', ['content' => $content]);
} else {

?>
<div class="wrapper">

    <?= $this->render('left'); ?>
    
    <div class="main-panel">
        <?php 
         ?>
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?= Html::tag('p', 'JOB POINT', ['class' => 'navbar-brand']); ?>

                </div>
                <div class="collapse navbar-collapse">
                    <form class="navbar-form navbar-right" role="search">
                    </form>
                    <ul class="nav navbar-nav navbar-right">

                        <?php  if (Yii::$app->user->isGuest) { ?>
                            <li>
                                <a href="<?= Url::to(['/user/register']) ?>" title="Register">
                                   <i class="material-icons">mode_edit</i> Register
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/user/login']) ?>" title="Log in">
                                   <i class="fa fa-user"></i> Log in
                                </a>
                            </li>
                        <?php }?>
                        <?php if (!Yii::$app->user->isGuest) {?>  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user fa-fw"></i><?= strtoupper(Yii::$app->user->identity->userinfo->fullName) ?>
                                </a>
                                <ul class="dropdown-menu">                                                         
                                    <li>
                                        <a href="<?= Url::to(['/user/settings']) ?>" >Profile Setting</a>
                                    </li>                                                                        
                                    <li>
                                        <?= Html::a('Log out', ['/user/security/logout'], [ 
                                                'class' => 'dropdown-toggle', 'data-toggle=> dropdown', 'btn btn-block',
                                                'data' => [
                                                  'confirm' => 'Are you sure you want to log out?',
                                                  'method' => 'post', 
                                                ],
                                            ]) ?>
                                    </li>       
                                </ul>
                            </li>                          
                    <?php } ?> 
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content" style="background-color: white;">    
            <div class="container-fluid">
                <!-- BREADCRUMBS -->
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <!-- ALERT WIDGET -->
                <?= Alert::widget() ?>
                <!-- CONTENT -->
                <?= $content ?>
            </div>
        </div>

    </div>    
</div>

<?php } ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

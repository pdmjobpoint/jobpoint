<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <?= Html::a(Html::img('@web/jobpoint.png', ['class' => 'image-circle', 'width' => '35px', 'align' => 'left', 'alt' => 'System Logo']) . '&nbsp; JOB POINT', ['/site/index'], ['class' => 'navbar-brand']); ?>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links pull-right">
            <li>
                <?= Html::a('<i class="fa fa-user fa-fw"></i>Log In', ['/user/login']); ?>
            </li>
        </ul>
        <ul class="nav navbar-top-links pull-right">
            <li>
                <?= Html::a('<i class="fa fa-pencil fa-fw"></i>Register', ['/user/register']); ?>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class='row'>&nbsp;</div>
        <?= Alert::widget() ?>
        <br><br>
        <?= $content ?>
    </div>
    

<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>

<nav class="navbar  navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
  <div class="container">
    <div class="navbar-translate">
      <?= Html::a('<span class="logo-lg">'. Html::img('@web/jobpoint.png', ['width  ' => '40px', 'class' => 'img-circle']) . '</span> <b>JOB POINT</b>', ['/site/index'], ['class' => 'navbar-brand']); ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse collapse">
      <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <?= Html::a(' <i class="fa fa-user fa-fw"></i> Sign in', ['/user/security/login'], ['class' => 'nav-link', 'rel' => 'tooltip', 'data-placement' => 'bottom']); ?>
          </li>
          <li class="nav-item">
            <?= Html::a(' <i class="fa fa-user fa-fw"></i> Register', ['/user/register'], ['class' => 'nav-link', 'rel' => 'tooltip', 'data-placement' => 'bottom']); ?>
          </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
       <br><br><br><br>
        <?= Alert::widget() ?>
        <br><br>
        <?= $content ?>
    </div>
    

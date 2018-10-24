<?php 

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\bootstrap\Nav;

?>

<div class="sidebar" data-color="purple" data-image="jobpoint.png">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <?= Html::a('<span class="logo-lg">'. Html::img('@web/jobpoint.png', ['width  ' => '50px', 'class' => 'img-circle']) . '</span> JOB POINT', ['/site/index'], ['class' => 'simple-text']); ?>
    </div>
    
    <div class="sidebar-wrapper">
    <!-- WIP: Yii Nav does not accept HTML tags for label -->
        <ul class="nav">
             <?php  
                $active           = ['class' => ''];
                $active1          = ['class' => ''];
                $active2          = ['class' => ''];
                $active3          = ['class' => ''];
                $active4          = ['class' => ''];
                $active5          = ['class' => ''];
                $active6          = ['class' => ''];
                $active7          = ['class' => ''];
                $active8          = ['class' => ''];
                $active9          = ['class' => ''];
                $active10          = ['class' => ''];
                $active11          = ['class' => ''];
                $active12          = ['class' => ''];

                if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') {
                    Html::addCssClass($active, 'active');
                } elseif (Yii::$app->controller->id == 'service-category') {
                    Html::addCssClass($active1, 'active'); 
                } elseif (Yii::$app->controller->id == 'service-type') {
                    Html::addCssClass($active2, 'active'); 
                } elseif (Yii::$app->controller->id == 'citizenship') {
                    Html::addCssClass($active3, 'active'); 
                } elseif (Yii::$app->controller->id == 'disability') {
                    Html::addCssClass($active4, 'active'); 
                } elseif (Yii::$app->controller->id == 'employment-status') {
                    Html::addCssClass($active5, 'active'); 
                }  elseif (Yii::$app->controller->id == 'eligibility') {
                    Html::addCssClass($active6, 'active'); 
                } elseif (Yii::$app->controller->id == 'civil-status') {
                    Html::addCssClass($active7, 'active'); 
                } elseif (Yii::$app->controller->id == 'worker') {
                    Html::addCssClass($active8, 'active'); 
                } elseif (Yii::$app->controller->id == 'message') {
                    Html::addCssClass($active9, 'active'); 
                } elseif (Yii::$app->controller->id == 'usertype') {
                    Html::addCssClass($active10, 'active'); 
                } elseif (Yii::$app->controller->id == 'educational-level') {
                    Html::addCssClass($active11, 'active'); 
                }
            ?>

            <?php   if(!Yii::$app->user->isGuest){ ?>

                <li>
                    <a data-toggle="collapse" href="#pagesExamples1" class="collapsed" aria-expanded="false">
                        <i class="fa fa-legal fa-fw"></i>
                        <p> Services
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples1" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <?= Html::tag('li', Html::a('Service Providers', ['/worker']), $active8); ?>
                            <?= Html::tag('li', Html::a('Service Category', ['/service-category']), $active1); ?>
                            <?= Html::tag('li', Html::a('Service Type', ['/service-type']), $active2); ?> 
                        </ul>
                    </div>
                </li>    
                <li>
                    <a data-toggle="collapse" href="#pagesExamples2" class="collapsed" aria-expanded="false">
                        <i class="fa fa-cogs fa-fw"></i>
                        <p> Maintenance
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples2" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <?= Html::tag('li', Html::a('Citizenship', ['/citizenship']), $active3); ?>
                            <?= Html::tag('li', Html::a('Disability', ['/disability']), $active4); ?>
                            <?= Html::tag('li', Html::a('Employment Status', ['/employment-status']), $active5); ?>
                            <?= Html::tag('li', Html::a('Educational Level', ['/educational-level']), $active11); ?>
                            <?= Html::tag('li', Html::a('Eligibility', ['/eligibility']), $active6); ?>
                            <?= Html::tag('li', Html::a('Civil Status', ['/civil-status']), $active7); ?>
                            <?= Html::tag('li', Html::a('Messages', ['/message/message']), $active9); ?>
                            <?= Html::tag('li', Html::a('User Types', ['/usertype']), $active10); ?>
                        </ul>
                    </div>
                </li>    
                <?= Html::tag('li', Html::a('<i class="fa fa-users fa-fw"></i>User Management', ['/user/admin']), $active12); ?>

            <?php }?>
        </ul>    

    </div>  
</div>


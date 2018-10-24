<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Usertype */

$this->title = 'Create User Type';
$this->params['breadcrumbs'][] = ['label' => 'User Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usertype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

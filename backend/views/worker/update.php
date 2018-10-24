<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = 'Update Service Providers';
$this->params['breadcrumbs'][] = ['label' => 'Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="worker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

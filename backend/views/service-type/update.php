<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ServiceType */

$this->title = 'Update Service Type: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Service Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

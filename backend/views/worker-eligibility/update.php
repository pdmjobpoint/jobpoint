<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\WorkerEligibility */

$this->title = 'Update Worker Eligibility: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Worker Eligibilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="worker-eligibility-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

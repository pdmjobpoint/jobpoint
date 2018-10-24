<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\WorkerEligibility */

$this->title = 'Create Worker Eligibility';
$this->params['breadcrumbs'][] = ['label' => 'Worker Eligibilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-eligibility-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

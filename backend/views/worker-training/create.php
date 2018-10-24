<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\WorkerTraining */

$this->title = 'Create Worker Training';
$this->params['breadcrumbs'][] = ['label' => 'Worker Trainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-training-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

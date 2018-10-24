<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkerTrainingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-training-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'worker_id') ?>

    <?= $form->field($model, 'training_name') ?>

    <?= $form->field($model, 'training_duration') ?>

    <?= $form->field($model, 'training_institution') ?>

    <?php // echo $form->field($model, 'training_certificates') ?>

    <?php // echo $form->field($model, 'training_completion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkerTraining */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-training-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'worker_id')->textInput() ?>

    <?= $form->field($model, 'training_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'training_duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'training_institution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'training_certificates')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'training_completion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkerEligibility */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-eligibility-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'worker_id')->textInput() ?>

    <?= $form->field($model, 'eligibility_id')->textInput() ?>

    <?= $form->field($model, 'eligibility_licenseno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eligibility_expirydate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

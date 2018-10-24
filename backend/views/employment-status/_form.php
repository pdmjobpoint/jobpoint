<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EmploymentStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employment-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employment_status_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

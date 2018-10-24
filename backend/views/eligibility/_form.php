<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Eligibility */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eligibility-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eligibility_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eligibility_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

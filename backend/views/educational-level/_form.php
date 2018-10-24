<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EducationalLevel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="educational-level-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'educational_level_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

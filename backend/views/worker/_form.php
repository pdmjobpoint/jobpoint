<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'worker_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_suffix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_birthdate')->textInput() ?>

    <?= $form->field($model, 'worker_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_placeofbirth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_civil_status_id')->textInput() ?>

    <?= $form->field($model, 'worker_present_houseno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_present_brgy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_present_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_present_province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_permanent_houseno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_permanent_brgy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_permanent_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_permanent_province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_citizenship_id')->textInput() ?>

    <?= $form->field($model, 'worker_height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_landlineno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_primary_cpno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_second_cpno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_disability_id')->textInput() ?>

    <?= $form->field($model, 'worker_employment_status_id')->textInput() ?>

    <?= $form->field($model, 'worker_preferred_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_preferred_industry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_preferred_location_local')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_preferred_location_overseas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_expected_salary')->textInput() ?>

    <?= $form->field($model, 'worker_educ_level_id')->textInput() ?>

    <?= $form->field($model, 'worker_educ_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_educ_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_educ_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_educ_award')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_past_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_past_company_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_past_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_inclusive_date')->textInput() ?>

    <?= $form->field($model, 'worker_status_appointment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_centuryskill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_technicalskill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_createddate')->textInput() ?>

    <?= $form->field($model, 'worker_created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

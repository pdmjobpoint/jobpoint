<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'worker_firstname') ?>

    <?= $form->field($model, 'worker_lastname') ?>

    <?= $form->field($model, 'worker_middlename') ?>

    <?php // echo $form->field($model, 'worker_suffix') ?>

    <?php // echo $form->field($model, 'worker_birthdate') ?>

    <?php // echo $form->field($model, 'worker_gender') ?>

    <?php // echo $form->field($model, 'worker_placeofbirth') ?>

    <?php // echo $form->field($model, 'worker_civil_status_id') ?>

    <?php // echo $form->field($model, 'worker_present_houseno') ?>

    <?php // echo $form->field($model, 'worker_present_brgy') ?>

    <?php // echo $form->field($model, 'worker_present_city') ?>

    <?php // echo $form->field($model, 'worker_present_province') ?>

    <?php // echo $form->field($model, 'worker_permanent_houseno') ?>

    <?php // echo $form->field($model, 'worker_permanent_brgy') ?>

    <?php // echo $form->field($model, 'worker_permanent_city') ?>

    <?php // echo $form->field($model, 'worker_permanent_province') ?>

    <?php // echo $form->field($model, 'worker_citizenship_id') ?>

    <?php // echo $form->field($model, 'worker_height') ?>

    <?php // echo $form->field($model, 'worker_weight') ?>

    <?php // echo $form->field($model, 'worker_landlineno') ?>

    <?php // echo $form->field($model, 'worker_primary_cpno') ?>

    <?php // echo $form->field($model, 'worker_second_cpno') ?>

    <?php // echo $form->field($model, 'worker_email') ?>

    <?php // echo $form->field($model, 'worker_disability_id') ?>

    <?php // echo $form->field($model, 'worker_employment_status_id') ?>

    <?php // echo $form->field($model, 'worker_preferred_occupation') ?>

    <?php // echo $form->field($model, 'worker_preferred_industry') ?>

    <?php // echo $form->field($model, 'worker_preferred_location_local') ?>

    <?php // echo $form->field($model, 'worker_preferred_location_overseas') ?>

    <?php // echo $form->field($model, 'worker_expected_salary') ?>

    <?php // echo $form->field($model, 'worker_educ_level_id') ?>

    <?php // echo $form->field($model, 'worker_educ_year') ?>

    <?php // echo $form->field($model, 'worker_educ_school') ?>

    <?php // echo $form->field($model, 'worker_educ_course') ?>

    <?php // echo $form->field($model, 'worker_educ_award') ?>

    <?php // echo $form->field($model, 'worker_past_company') ?>

    <?php // echo $form->field($model, 'worker_past_company_address') ?>

    <?php // echo $form->field($model, 'worker_past_position') ?>

    <?php // echo $form->field($model, 'worker_inclusive_date') ?>

    <?php // echo $form->field($model, 'worker_status_appointment') ?>

    <?php // echo $form->field($model, 'worker_centuryskill') ?>

    <?php // echo $form->field($model, 'worker_technicalskill') ?>

    <?php // echo $form->field($model, 'worker_createddate') ?>

    <?php // echo $form->field($model, 'worker_created_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
